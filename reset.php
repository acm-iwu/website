<?php
session_start();
  require_once 'common/pages.php';

  $page = PAGE_HOME;

  require 'template/header.php';
  if(!isset($_SESSION['user'])){
	  die();
	  }
?>
<form action="reset.php" method="post">
	<input class="form-control" type="password" name="pass" placeholder="Enter your current password"><br>
    <input class="form-control" type="password" name="newpass" placeholder="Enter new password"><br>
    <center>
    <input class="btn btn-primary" type="submit" name="login" value="Login">
	</center>
</form>

<?php
require("db.php");
	if(isset($_POST['newpass']) && isset($_POST['pass'])){
			if(!empty($_POST['newpass']) && !empty($_POST['pass'])){
					$newpass = mysql_real_escape_string($_POST['newpass']);
					$pass = mysql_real_escape_string($_POST['pass']);
					  $query = "select  `pass` 
						from `adminlogin` 
						where `pass` = '$pass'
					";
					$result = mysql_query($query)or die();
					
					if(mysql_num_rows($result) == 1){
					echo	$query = "
						update `adminlogin` set `pass` = '$newpass' 
						";
						mysql_query($query)or die();
						echo "<script>alert('Password changed successfully');</script>";
						}else{
					echo mysql_error(); 
							}
				}
		}
?>


<?php
  require 'template/footer.php';
?>
