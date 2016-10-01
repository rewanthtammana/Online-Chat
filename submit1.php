<?php

  include 'database.php';

  extract($_POST);
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (!preg_match("/^[a-zA-Z ]*$/",$user))
    {
      die('Only letters and white space allowed.Try with a valid username.');
    }
    if(empty($user)||empty($enroll)||empty($pass1)||empty($pass2))
    {
      die('Fill in all the fields to register successfully.');
    }
      $n = mysql_escape_string($user);
      $e = mysql_escape_string($enroll);
      $p1 = mysql_escape_string($pass1);
      $p2 = mysql_escape_string($pass2);

      $qry = mysql_query("SELECT * FROM `login` WHERE `username`='$n';") or die(mysql_error());
      $result = mysql_fetch_array($qry);

      $qry1 = mysql_query("SELECT * FROM `login` WHERE `enroll`='$e';") or die(mysql_error());
      $result1 = mysql_fetch_array($qry1);

      if($result == '0' && $result1 == '0')
      {
        mysql_query("INSERT INTO `login` VALUES('$e','$p1','ID','$n','off')") or die(mysql_error());

      echo "Registered successfully.";
      }
      else {
        die('<h4>Username/enrollment number already Registered.Try with a new one.</h4>');
      }
      echo "
      <html>
      <br><br>Move to  <a href = 'index.php'> login </a>  page.
      <br><br>Go to <a href = 'register1.php'> register </a> page.
      </html>
      ";
  }

 ?>
