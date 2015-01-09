<?php
session_start();
  require_once 'common/pages.php';

  $page = PAGE_PROJECTS;

  require 'template/header.php';
  
  
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
							$n
							<a id='enter_button' class='btn btn-default' href='projects.php?id=".$id."' role='button'>View details &raquo;</a>
						</div>
						
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
