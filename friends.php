<?php

error_reporting(0);
session_start();
include 'database.php';
include 'header.php';
$i = 0;

$n = $_SESSION['username'];
$n = mysql_real_escape_string($n);

$qry = mysql_query("SELECT * FROM `db_sent` WHERE `sent_from`='$n';") or die(mysql_error());

while($result = mysql_fetch_array($qry))
{
  $arr[$i++] = $result['sent_to'];
  //echo $result['sent_to'] ;
  //echo "<br>";
}
echo "<h4>Your Friends</h4>";
$j = 0;$z=0;

for($j=0;$j<$i;$j++)
{
  $count = 1;
  for($z=$j+1;$z<$i;$z++){
    if($arr[$j] == $arr[$z])
      $count++;
//      echo $count;
    }
    if($count==1)
    echo $arr[$j]."<br>";
}

 ?>
