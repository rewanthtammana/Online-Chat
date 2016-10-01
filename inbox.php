
<?php
error_reporting(0);
session_start();
include 'database.php';
include 'header.php';
$i = 0;

$n = $_SESSION['username'];
$n = mysql_real_escape_string($n);

echo "<br>";echo "<br>";

$qry = mysql_query("SELECT * FROM `db_sent` WHERE `sent_to`='$n';") or die(mysql_error());
echo "<table border='1' style='width:100%'>";
echo "<tr><td><h2>Sent From</h2></td><td><h2>Message</h2></td></tr>" ;
while($result = mysql_fetch_array($qry))
{

  echo "<tr><td>".$result['sent_from']."</td><td>".$result['message']."</td></tr>" ;//echo "--------". $result['message'];

}
echo "</table>";

 ?>
