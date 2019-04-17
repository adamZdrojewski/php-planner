<?php

include 'dbinfo.php';

session_start();

$username = $_SESSION['username'];

$con = mysqli_connect($dbip, $dbuser, $dbpass);

mysqli_select_db($con, $dbname);

$newtask = $_POST['newtask'];

$s = "INSERT INTO {$username} (name) VALUES('$newtask')";

mysqli_query($con, $s);

header('location:taskview.php');

?>