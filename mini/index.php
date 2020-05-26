<?php
   
require 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>LogIn Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#7f8c8d">
	<div id="main_box">
	<center>
		<h2>LogIn Form<h2>
		<img src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fcgaxisimg.ams3.cdn.digitaloceanspaces.com%2F2014%2F10%2F23a-copy1-435x435.jpg&imgrefurl=https%3A%2F%2Fcgaxis.com%2Fproduct-category%2F3d-models%2Fplants%2F&docid=IeaiB9Kmqoj6zM&tbnid=wVW3Hm_yE-ALWM%3A&vet=12ahUKEwjSpePSl-nmAhVc73MBHXTZBQE4ZBAzKCIwInoECAEQKg..i&w=435&h=435&bih=744&biw=767&q=small%20plant%20image&ved=2ahUKEwjSpePSl-nmAhVc73MBHXTZBQE4ZBAzKCIwInoECAEQKg&iact=mrc&uact=8" class="image11"/>
	</center>
	
	
	<form action="index.php" method="post" class="form11">
		<label><b>Username:</b></label><br>
		<input name="username" type="text" class="inputvalues" placeholder="Type your username"/><br>
		<label><b>Password:</b></label><br>
		<input name="password" type="text" class="inputvalues" placeholder="Type your password"/>
		<input name="loginn" type="submit" id="login_button" value="Login" /><br>
		<a href="register.php"><input type="button" id="register_button" value="Regsiter" /></a>
	</form>
	<?php
	if(isset($_POST['loginn']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$query="select * from user_info where username='$username' AND password=$password";
		
		$query_run = mysqli_query($con , $query);
		   if(mysqli_num_rows($query_run)>0)
		   {
			   $_SESSION['username']=$username ;
			   header('location:try.html');
		   }
		   else
		   {
			   echo '<script type="text/javascript"> alert("Invalid credentials") </script>';
		   }
	}
	
	
	
	
	
	
	
	?>
	</div>
</body>
</html>