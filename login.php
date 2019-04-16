<?php

session_start();

$con = mysqli_connect('localhost', 'root', 'admin');

mysqli_select_db($con, 'basictasks');

$username = $_POST['username'];
$password = $_POST['password'];

$s = "select * from users where username='$username' && password='$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);


if($num == 1)
{
	$row = mysqli_fetch_array($result);
	
	if($row[1] == true)
	{
		$_SESSION['username'] = $username;
		header('location:taskview.php');
	}
	else
	{
		header('Location:index.php');
	}
	
	
}
else
{
	header("location:index.php?{$num}");
}

?>