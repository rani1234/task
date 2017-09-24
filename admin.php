<?php
include 'connection.php';

if(isset($_POST['email']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$sql="select * from admin_login where email='".$email."' and password='".$password."'";
	$result=mysql_query($sql);
	
	if($row=mysql_fetch_array($result))
	{
		header('location:view.php');
	}
	else
	{
		echo "you are not admin";
	}
}
?>
<html>
<head></head>
<body>
<form method="post" action="">
<input type="email" placeholder="enter your email" name="email"></br>
<input type="password" placeholder="enter your password" name="password"> </br>
<input type="submit" value="Login">
<form>
</body>
</html>
