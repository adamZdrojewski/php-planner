<?php

include 'dbinfo.php';

session_start();

$username = $_SESSION['username'];

$con = mysqli_connect($dbip, $dbuser, $dbpass);

mysqli_select_db($con, $dbname);

$s = "DELETE FROM users WHERE username = '".$username."'";

mysqli_query($con, $s);

$s = "DROP TABLE ".$username."";

mysqli_query($con, $s);

header("location:index.php");

?>