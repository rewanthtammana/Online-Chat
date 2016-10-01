<?php
session_start();
error_reporting(0);
include 'database.php';
extract($_POST);
function call(){
$n = $result3[3];
echo $n;

}

 ?>

<html>

<style>
.message{
  margin-left: 400px;
  margin-top: 100px;
}
</style>
<form action="sent.php" method="post">
<div class="message">
  <div class="heading">
  Compose the message to be sent......  <br><br>
    
  </div>

    <?php call();?>
  <br><br>
  <div class="heading">
  Message:
</div>
  <textarea name="message" rows="5" cols="40"></textarea>

<br>
<div class="submit">
  <input type="submit" value="Send" name="send"/>

  </div>
  </div>
</form>


</html>
