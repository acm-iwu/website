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
<div class="container">
    <div class="row" style="margin-bottom: 20px; padding-bottom: 5px; border: none;">
        <div class="col-md-12">
        <h1>Add new project</h1>
        <p>Use the below form to add a new project to the <a href="project.php">projects page</a>.</p>
        <br />

        <form action="admin.php" method="post">
            <input class="form-control" type="text" name="name" style="max-width: 450px;" placeholder="Enter the title of the project" /><br	>
            <textarea class="form-control" rows="5" cols="50" style="max-width: 450px;" name="des" placeholder="Enter the project description here"></textarea>
             <br />
            <input  id="enter_button" class="btn btn-default" type="submit" name="submit" value="Save">
        	
        </form>
	 </div>
</div>

 <div class="row" style="margin-bottom: 20px; padding-bottom: 5px; border: none;">
        <div class="col-md-12">
        <h1>Projects</h1>
        <p>The members of IWU ACM!</p>
        </div>
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
					
					 <div class='admin row'>
        			   <div class='col-md-7'><h3> $n </h3> </p></div>
						
							<div class='col-md-4' style='text-align: right;'>
								
								<form action='delete.php?id=".$id."' method='post' style='float:left'>
									<input id='enter_button' class='btn btn-default' type='submit' name='delete' value='Delete' >
								</form>
							
								<form action='addGallery.php?id=".$id."' method='post' style='float:left'>
									<input type='submit' class='btn btn-default' id='enter_button' name='Add Gallery' value='Add Gallery' >
								</form>
									
								<form action='addworker.php?id=".$id."' method='post' style='float:left'>
									<input class='btn btn-default' id='enter_button' type='submit' name='addWorker' value='Add Worker' >
								</form>
							
							</div>
						  </div>
						 	
					";
				}

			}
				
?>




</div>
<?php
  require 'template/footer.php';
?>
