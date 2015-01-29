<?php
session_start();
  require_once 'common/pages.php';

  $page = PAGE_PROJECTS;

  require 'template/header.php';
  
  ?>
 <div class="container">
    <div class="row" style="margin-bottom: 20px; padding-bottom: 5px; border: none;">
        <div class="col-md-12">
        <h1>Projects</h1>
        <p>A list of our current projects!</p>
        </div>
    </div>
 
  <?php
  $query = "select p.*,ph.link from `projectname` as p left join photo as ph on  ph.id=p.id order by p.id desc";
		$result = mysql_query($query);
		
		if($result){
			while($row = mysql_fetch_assoc($result)){
					
					$id =  $row['id'];
					$n =  $row['name'];
					$link =  $row['link'];
					$description = $row['des'];
					$server =  $_SERVER['SCRIPT_NAME'];
									
					echo "<div class='project row'>
        				  <div class='col-md-1'><center><img src=".$link." class='img-circle'></center></div>
							 <div class='col-md-9'><h3> ".$n." </h3> <p> ".$description." </p> </div>
							  <div class='col-md-2'><a style='width:100%;' type='button' class='btn btn-default' href='projects.php?id=".$id."' role='button'>View Project</a> </div>
						</div>
						
					";
				}

			}
		
?>
</div>

<?php
  require 'template/footer.php';
?>
