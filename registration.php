<?php

session_start();

$con = mysqli_connect('localhost', 'root', 'admin');

mysqli_select_db($con, 'basictasks');

$username = $_POST['username'];
$password = $_POST['password'];



	
		
$query = "SELECT * FROM users where username='$username'";	
$data = mysqli_query($con, $query);	
$total = mysqli_num_rows($data);		
if($total > 0)
{
    header("location:index.php");
}



$s = "INSERT INTO users (username, password) VALUES('$username', '$password')";

mysqli_query($con, $s);

$s = "CREATE TABLE {$username} (
name VARCHAR(50)
)";

mysqli_query($con, $s);

$_SESSION['username'] = $username;

header("location:taskview.php");

?>