<?php
	require 'dbconfig/config.php';
?>
<!DOCTYPE html> 
<html>


<head>
	<title> Registration Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>


<body style="background-color:#c8d6e5">

<div id="blackbox">

<center>
	<h1 style="color: #2c3e50;">REGISTRATION FORM</h1>
	<img src="img/Login.jpg" class="avatar">
</center>
	

<form class="myform" action="register.php" method="post">


	<label  style="color: #2c3e50; font-size:160%; " ><b>USERNAME:</b></label><br>

	<input type="text" name="username" class="inputvalues" placeholder="Type your username" required><br>



	<label  style="color: #2c3e50; font-size:160%;" ><b>PASSWORD:</b></label><br>

	<input type="password" name="password" class="inputvalues" placeholder="Type your password" required><br>



	<label  style="color: #2c3e50; font-size:160%;"><b>CONFIRM PASSWORD:</b></label><br>

	<input type="password" name="cpassword" class="inputvalues" placeholder="Retype your password" required><br>



	<input type="submit" name="submit_btn" value="SIGN UP" style="width: 100%;  margin-top: 10px;	background-color:#6F1E51;padding: 5px;color: white;width:100%;text-align: center;font-size: 18px;font-weight: bold;margin-bottom: 0px;" id="signup_btn"><br>


	<a href="index.php" >=<input type="button" style="
	background-color:#1B1464;
	padding: 5px;
	color: white;
	width:100%;
	text-align: center;
	font-size: 18px;
	font-weight: bold;
	margin-top: 0px;
	margin-bottom: 20px;" id="back_btn" value="BACK"></a>


	</div>
</form>


<?php

if(isset($_POST['submit_btn']))
{
    	
	//echo '<script type="text/javascript"> alert("Signup button clicked") </script>';
	$username= $_POST['username'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];

    if($password==$cpassword)
    {
    	$query="select * from user where username ='$username'";
    	$query_run=mysqli_query($con,$query);
    	  
    	  if(mysqli_num_rows($query_run)>0)
    	  {
    	  	echo '<script type="text/javascript"> alert("USER ALREADY EXISTS") </script>';
    	  }
    else
    	  {
    	  	$query="insert into user values('$username','$password')";
    	  	$query_run=mysqli_query($con,$query);

    	  	if($query_run)
    	  	{
    	  		 	echo '<script type="text/javascript"> alert("USER REGISTERED") </script>';
    	  	}
    	  	else
    	  		{
    	  			 	echo '<script type="text/javascript"> alert("ERROR HAS OCCURED!  ") </script>';
    	  		}
    	  }
    	
    }
    else
    {
    	 	echo '<script type="text/javascript"> alert("PASSWORD DOES NOT MATCH") </script>';

    }
}






?>









</body>
</html>