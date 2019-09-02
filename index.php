<?php
session_start();
	require 'dbconfig/config.php';
?>
<!DOCTYPE html> 
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body style="background-color:#c8d6e5">

<div id="blackbox">
<center>
	<h1 style="color: #2c3e50;">LOGIN FORM</h1>
	<img src="img/Login.jpg" class="avatar">
</center>
	

<form class="myform" action="index.php" method="post">

	<label  style="color: #2c3e50; font-size:160%; "><b>USERNAME:</b></label><br>

	<input  name="username" type="text"  class="inputvalues" placeholder="Type your username" required><br>

	<label  style="color: #2c3e50; font-size:160%;"><b>PASSWORD:</b></label><br>

	<input name="password" type="password" class="inputvalues" placeholder="Type your password" required><br>

	<input name="login" type="submit"  value="LOGIN" id="login_btn">

	<a href="register.php"><input type="button" id="register_btn" value="REGISTER"></a>
	
</form>


<?php
if(isset($_POST['login']))
{   $username=$_POST['username'];
    $password=$_POST['password'];
	$query="select * from user WHERE username='$username' AND password='$password' ";
	$query_run=mysqli_query($con,$query);
	if(mysqli_num_rows($query_run)>0)
	{
            $_SESSION['username'] = $username;
            header('location:home.php');
	}
	else
	{
              echo '<script type="text/javascript"> alert("INVALID CREDENTIALS") </script>';
	}
}




?>



</div>




</body>
</html>