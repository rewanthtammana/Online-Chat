<?php
session_start();
include 'database.php';

$e = $_SESSION['status'];

$qry1 = "UPDATE `login` SET status = 'off' WHERE enroll = '$e';";
$result1 = mysql_fetch_array(mysql_query($qry1));

session_destroy();

header('location:index.php');
?>
