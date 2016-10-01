<?php
error_reporting(0);
session_start();
require('includes/init.php');
/*  function back_to_login() {
    header('Location: index.php');
  }*/

  /*function send_to_chat() {
    header('Location: chat/index.php');
//  echo "sendtochat";
  }*/

  include 'database.php';
  extract($_POST);

  if(isset($login))
  {

    if($user == "" || $pass == "")
    {
      die('Enter valid credentials');
    }
    $e = $user;
    $p = $pass;

    $qry = "SELECT * FROM `login` WHERE enroll = '$e';";
    $result = mysql_fetch_array(mysql_query($qry));

    if($result == '0')
    {
      die('<h4>No such user exists.Try with correct login details</h4>');
    }

    if($result['password'] != $p)
    {
      echo "Oops!!!!!<br>";
      die('<br>Wrong password.Try with correct one');
    }

    $qry1 = "UPDATE `login` SET status = 'on' WHERE enroll = '$e';";
    $result1 = mysql_fetch_array(mysql_query($qry1));

    $_SESSION['username'] = $result['username'];
		$_SESSION['enroll'] = $enroll;
    $_SESSION['status'] = $e;

	//	send_to_chat();
  //echo "<h3>Welcome ".$_SESSION['username']."</h3>";

  }
  echo "<div class='log'><h3>Logged in as  <a href='setting.php'>". $_SESSION['username']."</a></h3></div>";
  //echo $result['password'];
 ?>

<html>
<body>
  <style>
  .log{
    position: absolute;
    margin-top: -150px;
  }
  .online{
    margin-top: -250px;
    margin-left: 1000px;
  }
  .submit{
    margin-left: 400px;
    margin-top: 15px;
  }
  .tags{
    margin-top: -180px;
    margin-left: 30px;
  }
  .message{

    margin-top: 150px;
    margin-left: 400px;
  }
  .logout{
    position: absolute;
    margin-left:1000px;
    margin-top: -155px;
  }
  </style>
  <div class="logout">
    <a href="logout.php"><h4>Logout</h4></a>
  </div>
  <form action="sent.php" method="post">
  <div class="message">
    <div class="heading">
    Compose the message to be sent......  <br><br>
      To:
    </div>
      <textarea name="sent_to" rows="1" cols="30"></textarea>
    <br><br>
    <div class="heading">
    Message:
  </div>
    <textarea name="message" rows="5" cols="40"></textarea>
  </div>

  <div class="submit">
    <input type="submit" value="Send" name="send"/>

    </div>
</form>

    <div class="tags">
      <p><li><a href="inbox.php">Inbox</a></p>
      <p><li><a href="sent_msgs.php">Sent messages</a></p>
      <p><li><a href="friends.php">Friends</a></p>

    </div>
<div class='online'>
<?php
  include 'online.php';
 ?>
 </div>
</body>
</html>
