<?php
require 'C:\xampp\htdocs\mini\dbconfig\config.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Registration Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#7f8c8d">
	<div id="main_box">
	<center>
		<h2>Registration Form<h2>
		<img src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fcgaxisimg.ams3.cdn.digitaloceanspaces.com%2F2014%2F10%2F23a-copy1-435x435.jpg&imgrefurl=https%3A%2F%2Fcgaxis.com%2Fproduct-category%2F3d-models%2Fplants%2F&docid=IeaiB9Kmqoj6zM&tbnid=wVW3Hm_yE-ALWM%3A&vet=12ahUKEwjSpePSl-nmAhVc73MBHXTZBQE4ZBAzKCIwInoECAEQKg..i&w=435&h=435&bih=744&biw=767&q=small%20plant%20image&ved=2ahUKEwjSpePSl-nmAhVc73MBHXTZBQE4ZBAzKCIwInoECAEQKg&iact=mrc&uact=8" class="image11"/>
	</center>
	
	
	<form action="register.php" method="post" class="form11">
		<label><b>Username:</b></label><br>
		<input name="username" type="text" class="inputvalues" placeholder="Type your username" required /><br>
		<label><b>Password:</b></label><br>
		<input name="password" type="password" class="inputvalues" placeholder="Type your password" required />
		<label><b>Confirm Password:</b></label><br>
		<input name="cpassword" type="password" class="inputvalues" placeholder="Type your confirm password" required />
		<input name="submit_button" type="submit" id="signup_button" value="Sign Up" /><br>
		<a href="index.php"><input type="button" id="back_button" value="Back to LogIn" /></a>
	</form>
	
	<?php
	 if(isset($_POST['submit_button']))
	 {
		// echo '<script type="text/javascript"> alert("signup button clicked") </script>';
		
	$username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];	
		
		
	if($password==$cpassword)
	{
		$query = "select * from user_info where username='$username' ";
		$query_run = mysqli_query($con , $query);
		
		if(mysqli_num_rows($query_run)>0)
		{
			echo '<script type="text/javascript"> alert("username already exists") </script>';
		}
		else
		{
			$query="insert into user_info values ('$username','$password') ";
			$query_run = mysqli_query($con , $query);
			
			if($query_run)
			{
				echo '<script type="text/javascript"> alert("user registered") </script>';
			}
			else
			{
				echo '<script type="text/javascript"> alert("error") </script>';
			}
		}
	}		
	else
	{
		echo '<script type="text/javascript"> alert("Password and confirm password doesnt match") </script>';
	}
		
	 }
	?>
	</div>
</body>
</html>