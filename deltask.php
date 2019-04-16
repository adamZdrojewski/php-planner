<?php

session_start();

$username = $_SESSION['username'];

$con = mysqli_connect('localhost', 'root', 'admin');

mysqli_select_db($con, 'basictasks');

$name = $_POST['name'];

$s = "DELETE FROM ".$username." WHERE name = '".$name."'";

mysqli_query($con, $s);

header("location:taskview.php?");

?>