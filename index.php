<?php

session_start();

include 'database.php';
/*
require('includes/init.php');
if(check_login()==true){
	header('location: chat/chat.php');
}
*/
?>

<html>
<body>
	<style>
	.position{
		position:absolute;
		margin-left: 500px;
		margin-top: 150px;
	}
	.position1{
		position:absolute;
		margin-left: 500px;
		margin-top: 100px;
	}
	</style>

<h2 class="position1">Login to gmail</h2>
<table class="position">

<tr>
<form action="login1.php" method="POST" >

<td>Enrollment:</td> <td><input type="text" name="user"></td>
</tr>

<tr>
<td>Password:</td> <td><input type="password" name="pass"></td>
</tr>
<tr>
<td></td><td><input type="submit" name="login" value="login"> or <a href='register1.php'>SignUp</a></td>
</tr>

</form>
</table>
</body>
</html>
