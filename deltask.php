<?php

include 'dbinfo.php';

session_start();

$username = $_SESSION['username'];

$con = mysqli_connect($dbip, $dbuser, $dbpass);

mysqli_select_db($con, $dbname);

$name = $_POST['name'];

$s = "DELETE FROM ".$username." WHERE name = '".$name."'";

mysqli_query($con, $s);

header("location:taskview.php?");

?>