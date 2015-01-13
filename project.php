<?php
session_start();
  require_once 'common/pages.php';

  $page = PAGE_PROJECTS;

  require 'template/header.php';
  
  
  $query = "select p.*,ph.link from `projectname` as p left join photo as ph on  ph.id=p.id order by p.id desc";
		$result = mysql_query($query);
		
		if($result){
			while($row = mysql_fetch_assoc($result)){
					$id =  $row['id'];
					$n =  $row['name'];
					$link =  $row['link'];
					$description = $row['des'];
					$server =  $_SERVER['SCRIPT_NAME'];
					echo "<div id='projects'>
						   <img src='$link' width='75' height='75'  />
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
