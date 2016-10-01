<?php

session_start();
include 'database.php';

$n = $_SESSION['username'];
$qry3 = mysql_query("SELECT * FROM `login` WHERE `status`='on';") or die(mysql_error());

echo "People who are online : <br>(If no names are displayed it implies that no one is online right now)";

echo "<h4>";

while($result3 = mysql_fetch_array($qry3))
{
  if($result3[3]!=$n)
  echo "<a href=\"msg.php\"><li>".$result3[3]."</a> <br> ";
}
echo "</h4>";



 ?>
