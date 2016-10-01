<?php
session_start();
include 'database.php';
extract($_POST);

if(empty($sent_to) || empty($message))
{
  die('Fill in both the fields to send the message.');
}

$n = mysql_real_escape_string($sent_to);
$m = mysql_real_escape_string($message);

$qry = mysql_query("SELECT * FROM `login` WHERE `username`='$n';") or die(mysql_error());
$result = mysql_fetch_array($qry);

if($result == '0')
{
  die('Check your to field.Enter a valid username.');
}
$x = $_SESSION['username'];
$x = mysql_real_escape_string($x);

//stored in sentmail of user
mysql_query("INSERT INTO `db_sent` VALUES('ID','$n','$x','$m')") or die(mysql_error());

//stored in inbox of the receipient
//mysql_query("INSERT INTO `db_inbox` VALUES('ID','$x','$m')") or die(mysql_error());
//echo $x;
echo "Message successfully sent to ".$n;


 ?>
