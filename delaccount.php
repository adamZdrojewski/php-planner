<?php

session_start();

$username = $_SESSION['username'];

$con = mysqli_connect('localhost', 'root', 'admin');

mysqli_select_db($con, 'basictasks');

$s = "DELETE FROM users WHERE username = '".$username."'";

mysqli_query($con, $s);

$s = "DROP TABLE ".$username."";

mysqli_query($con, $s);

header("location:index.php");

?>