<?php
session_start();
  require_once 'common/pages.php';

  $page = PAGE_HOME;

  require 'template/header.php';
  if(!isset($_SESSION['user'])){
	 echo"You can not access Admin area please <a href='adminlogin.php'>login</a> if your are admin of the site";
	  die();
	  }
  
?>
<div id="admin">
<fieldset>
	<legend>Project Name And Description</legend>
    <form action="admin.php" method="post">
    	<input class="form-control" type="text" name="name" placeholder="Enter the title of the project" /><br	>
        <textarea class="form-control" rows="10" cols="90" name="des" placeholder="Enter the project description here"></textarea>
        <input  id="enter_button" class="btn btn-primary" type="submit" name="submit" value="Save">
    </form>
</fieldset>
</form>
</div>
<?php
require("db.php");
	if(isset($_POST['name'])&&isset($_POST['des'])){
			if(!empty($_POST['name'])&&!empty($_POST['des'])){
				
				$nam = mysql_real_escape_string($_POST['name']);
				$des = mysql_real_escape_string($_POST['des']);
				$query2 = "insert into `projectname`
					values('', '$nam', '$des');
				";
				mysql_query($query2)or die(mysql_error());	
				$_SESSION['nam']= $nam;
				$_SESSION['des']= $des;	
				
					
			}else{
					echo "fill all the fields";
				}
		}
		
		
		$query = "select * from `projectname` order by `id` desc";
		$result = mysql_query($query);
		
		if($result){
			while($row = mysql_fetch_assoc($result)){
					$id =  $row['id'];
					$n =  $row['name'];
					$description = $row['des'];
					$server =  $_SERVER['SCRIPT_NAME'];
					echo "
					
						<div id='projects'>
							$n<br>
							<form action='addworker.php?id=".$id."' method='post'>
							<input class='btn btn-primary' id='enter_button' type='submit' name='addWorker' value='Add Worker' >
							</form>
						<form action='addGallery.php?id=".$id."' method='post'>
							<input type='submit' class='btn btn-primary' id='enter_button' name='Add Gallery' value='Add Gallery' >
						</form>
						<form action='delete.php?id=".$id."' method='post'>
							<input id='enter_button' class='btn btn-primary' type='submit' name='delete' value='Delete' ><br>
						</div>
						</form>
						
					";
				}

			}
			
			
			
					
				
				
		
?>




<style>
	#admin{ width:800px; height:500px; margin:0px auto}
	
	#enter_button{ float:right; margin:3px 5px}
	#projects{ width:800px; height:auto; margin:0px auto; background-color:#FFF; padding:20px; border: ridge 1px #CCCCCC; border-radius-top:10px}
</style>

<?php
  require 'template/footer.php';
?>
