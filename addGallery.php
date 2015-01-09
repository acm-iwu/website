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
	<legend>Add pictures </legend>
    <form action="addGallery.php" method="post" enctype="multipart/form-data">
    	<input class="form-control" type="file" name="files[]" multiple  /><br	>
             <input  id="enter_button" class="btn btn-primary" type="submit" name="submit" value="Add">
              <input  id="enter_button" class="btn btn-primary" type="Button" name="submit" value="Done" onClick="referback()">
    </form>
</fieldset>
</form>
</div>
<?php
require("db.php");
	
	if(isset($_GET['id'])){
		$_SESSION['id'] =  $_GET['id'];
		
	}
				
				 $id = $_SESSION['id'];
	
	

$allowed = array('jpg','png', 'gif');

if(!empty($_FILES['files'])){
	foreach($_FILES['files']['name'] as $key => $name){
		if($_FILES['files']['error'][$key] ==0){
			$temp = $_FILES['files']['tmp_name'][$key];
			$ext = explode('.', $name);
			$ext = strtolower(end($ext));
			$file = md5_file($temp).time().'.'.$ext;
			$location = "pictures/$file";
			
				
				if(in_array($ext, $allowed) == true&&move_uploaded_file($temp,$location ) == true){
					
			$time = time();
			$query = "insert into `photo` 
				values('','$id','$location')
			";
			mysql_query($query) or die(mysql_error());
			
					
						
					}else{
						echo "<script>alert('error uploading files');</script>";
						}
				
				
				
			}		
		}			
	}
		
		
		$query = "select * from `photo` where `id` = ".$id." order by `id` desc";
		$result = mysql_query($query);
		
		if($result){
			while($row = mysql_fetch_assoc($result)){
					$no = $row['no'];
					$id =  $row['id'];
					$n =  $row['link'];
		
					echo "
					
						<div id='gallery'>
						<a href='delete.php?id=".$no."'><img class='close' src='pictures/517199.png' width='10' height='10'></a>
							<img src='$n' width='150' height='150'>
													
						</div>
						
					";
				}

		}
		
		
?>
<script>
	function referback(){
		window.location = "admin.php";
		}
</script>



<style>
	#admin{ width:800px; height:500px; margin:0px auto}
	.close{float:right; margin:5px 0px}
	#enter_button{ float:right; margin:3px 5px}
	#gallery{ width:200px; height:200;  background-color:#FFF; padding:20px; border: ridge 1px #CCCCCC; border-radius-top:10px; display:inline-block; position:relative; top:-300px}
</style>

<?php
  require 'template/footer.php';
?>
