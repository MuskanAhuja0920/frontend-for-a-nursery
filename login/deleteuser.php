
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>

<?php
// Initialize the session
session_start();
 /*
// Check if the user is already logged in, if yes then redirect him to delete page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: delete.php");
  exit;
}
 */
// Include config file
require_once "config.php";

$username = htmlspecialchars($_SESSION["username"]);

$sql = "DELETE FROM users WHERE username='" . $_SESSION["username"] . "'";

if (mysqli_query($link, $sql)) {
    echo "Record deleted successfully";
	
} else {
    echo "Error deleting record: " . mysqli_error($link);
}
// Destroy the session.
session_destroy();
?>


    <div class="page-header">
        <h1>User , <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Deleted from our site.</h1>
    </div>
    
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
</body>
</html>



