<?php

session_start();
echo "<h3>Logged in as <a href='setting.php'> ". $_SESSION['username']."</a></h3>";


 ?>
<html>
<style>
.logout{
  margin-left: 1250px;
  margin-top: -40px;
}
</style>
<div class="logout">
  <a href="logout.php"><h4>Logout</h4></a>
</div>
</html>
