<?php
session_start();
  require_once 'common/pages.php';

  $page = PAGE_HOME;

  require 'template/header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>Admin</h1>
        <p>Please enter your credentials to access the AdminCP.</p>
        <br />
<form action="adminlogin.php" method="post">
	<input class="form-control" type="text" name="user" style="max-width: 300px;" placeholder="Enter Username"><br>
    <input class="form-control" type="password" name="pass" style="max-width: 300px;" placeholder="Enter Username"><br>
    <input class="btn btn-default" type="submit" name="login" value="Login">
</form>

 </div>
 </div>
</div>

<?php
require("db.php");
	if(isset($_POST['user']) && isset($_POST['pass'])){
			if(!empty($_POST['user']) && !empty($_POST['pass'])){
					$user = mysql_real_escape_string($_POST['user']);
					$pass = mysql_real_escape_string($_POST['pass']);
					 $query = "select `username`, `pass` 
						from `adminlogin` 
						where `username` = '$user' && `pass` = '$pass'
					";
					$result = mysql_query($query)or die();
					
					if(mysql_num_rows($result) == 1){
						$_SESSION['user'] = $user;
						echo "<script>window.location='admin.php'</script>";
						}else{
							echo "<script>alert('error loging in');</script>";
							}
				}
		}
?>


<?php
  require 'template/footer.php';
?>
