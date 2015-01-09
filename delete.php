
<?php
require("db.php");
if(isset($_POST['delete']) && isset($_GET['id'])){
				$id = $_GET['id'];
				
				$query = "delete from `photo` where `id` = '$id'";
					mysql_query($query) or die(mysql_error());
					$query = "delete from `worker` where `id` = '$id'";
					mysql_query($query) or die(mysql_error());
				
				
				
					$query = "delete from `projectname` where `id` = '$id'";
					mysql_query($query) or die(mysql_error());
					echo"<script>
					window.location='admin.php';
					</script>";
				}
				
				
				if(isset($_GET['id'])){
				$id = $_GET['id'];
				
				$query = "delete from `photo` where `no` = '$id'";
					mysql_query($query) or die(mysql_error());
					
					echo"<script>
					window.location='addGallery.php';
					</script>";
				}
				if(isset($_GET['no'])){
				$id = $_GET['no'];
				
				$query = "delete from `worker` where `no` = '$id'";
					mysql_query($query) or die(mysql_error());
					
					echo"<script>
					window.location='addWorker.php';
					</script>";
				}
				
				?>