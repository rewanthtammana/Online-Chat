<?php
$con = mysql_connect('localhost', 'root', '','chatroom') or die(mysql_error());
   mysql_select_db("chatroom", $con);
   if($con)
   {
     echo "success";
   }
   else{
     die('Could not connect: ' . mysql_error());
   }
?>
