<?php
$connection=mysql_connect("localhost","root","","onlinechat") or die(mysql_error());
mysql_select_db("onlinechat",$connection);
//echo "success";
?>
