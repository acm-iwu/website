<?php
session_start();
  require_once 'common/pages.php';

  $page = PAGE_HOME;

  require 'template/header.php';
if(!isset($_SESSION['user'])){
	  die();
	  }
?>
<div id="admin">
	<fieldset>
	<legend>Add Worker to the project </legend>
    <form action="addworker.php" method="post">
    	<input class="form-control" type="text" name="name" placeholder="Enter the name of the worker..." /><br	>
             <input  id="enter_button" class="btn btn-primary" type="submit" name="submit" value="Add">
              <input  id="enter_button" class="btn btn-primary" type="Button" name="submit" value="Done" onClick="referback()">
    </form>
</fieldset>
</form>
<script>
	function referback(){
		window.location = "admin.php";
		}
</script>
<?php
	require("db.php");	
	if(isset($_GET['id'])){
		$_SESSION['id'] =  $_GET['id'];
		
	}
				
				 $id = $_SESSION['id'];
					
					if( isset($_POST['name'])){
					if(!empty($_POST['name'])){
					$n = $_POST['name'];
					
					
					$query = "insert into`worker` values('','$id', '$n')";
					mysql_query($query) or die(mysql_error());
						
						}
		}	
		
		$query = "select * from `worker` where `id` = ".$id." order by `id` desc";
		$result = mysql_query($query);
		
		if($result){
			while($row = mysql_fetch_assoc($result)){
					$no = $row['no'];
					$id =  $row['id'];
					$n =  $row['name'];
		
					echo "
					
						<div id='projects'>
							$n<a href='delete.php?no=".$no."'><img class='close' src='pictures/517199.png' width='10' height='10'></a><br>
							
							<br>
						</div>
						
					";
				}

		}
		
		
?>
</div>
<style>
#admin{ width:800px; height:500px; margin:0px auto}
#enter_button{ float:right; margin:3px 5px}
.close{float:right; margin:5px 0px}
	#projects{ width:800px; height:auto; margin:0px auto; background-color:#FFF; padding:20px; border: ridge 1px #CCCCCC; border-radius-top:10px}

</style>
<?php
  require 'template/footer.php';
?>
