  <?php

  include 'database.php';

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
tr.pos{
  position:absolute;
  margin-top: 10px;
}
</style>
<h2 class="position1">Register to gmail</h2>
 	<table class="position">
 		<form action='submit1.php' method="POST" >
 		<tr>
 			<td>Username: </td><td><input type='text' name='user' /></td>
 		</tr>
    <tr></tr><tr></tr><tr></tr>
 		<tr>
 			<td>Enrollment no: </td><td><input type='text' name='enroll' /></td>
 		</tr>
    <tr></tr><tr></tr><tr></tr>
 		<tr>
 			<td>Password: </td><td><input type='password' name='pass1' /></td>
 		</tr>
    <tr></tr><tr></tr><tr></tr>
 		<tr>
 			<td>Re-Password: </td><td><input type='password' name='pass2' /></td>
 		</tr>
    <tr></tr><tr></tr><tr></tr>
 		<tr class="pos">
 			<td></td><td><input type='submit' name='register' value='Register' /> or  <a href = 'index.php' >Login</a></td>
 		</tr>
 		<tr>
 			<!--td></td><td><span id='err_submit' style='color:red; font-size:12px;'><?php //echo $err_msg; ?></span></td-->
 		</tr>
 		</form>
 	</table>
 </body>
 </html>
