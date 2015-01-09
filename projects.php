<?php
session_start();

  require_once 'common/pages.php';

  $page = PAGE_PROJECTS;

  require 'template/header.php';
  
  ?>


<?php

require("db.php");
if(!isset($_GET['id'])){
	 die();
	  }else{
		   $id = $_GET['id'];
		  }
	  
	  
	  
	  
  	 $query = "select * from `projectname` where `id` = '$id'";
		$result = mysql_query($query);
		
		if($result){
			
			while($row = mysql_fetch_assoc($result)){
				
						 $name = $row['name'];
					 	 $description = $row['des'];
					
				}
			}else{
					echo "no data found";
				}
				
				

			
 
?>
<div class="col-md-6">
          <h2><?php 
		  	echo $name;
		  ?></h2>
          <p style="word-break:break-all"><?php
          	echo $description;
		  ?></p>
          <h2>People worked on the project</h2>
          <h4>
          	<?php
            	 $query = "select * from `worker` where `id` = '$id'";
		$result = mysql_query($query);
		
		if($result){
			
			while($row = mysql_fetch_assoc($result)){
				
						echo  "&raquo;".$worker = $row['name']."<br>";
					 	
					
				}
			}else{
					echo "no data found";
				}
			?>
          </h4>
          
          
        </div>
        
        
        
        <div class="row">
   
  <div class="col-md-6">
      <div id="projectCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
 
 
      <ol class="carousel-indicators">
      
      <?php
      	 $query = "select * from `photo` where `id` = '$id'";
		$result = mysql_query($query);
		
		$r = mysql_num_rows($result);
			if($r == 1){
					echo "
						<li data-target='#projectCarousel' class='active' data-slide-to='0'></li>
					";
					
			}else if($r > 1){
				echo "
						<li data-target='#projectCarousel' class='active' 					  	data-slide-to='0'></li>
					";
					for($i=1;$i<$r; $i++){
					echo "
						<li data-target='#projectCarousel' data-slide-to='$i'></li>
					";
				}
				}
			
		
			?>
	  
      </ol>
      <div class="carousel-inner">
            
            <?php
      	 $query = "select * from `photo` where `id` = '$id'";
		$result = mysql_query($query);
		
		$r = mysql_num_rows($result);
		
		$links = array();
		
		while($row = mysql_fetch_assoc($result)){
				$links[] = $row['link'];
			}
			
			if($r == 1){
					echo "
						<div class='item active'>
          <img src='$links[0]'>
		  
             </div>
					";
				}
				else if($r > 1){
					
					echo "
						<div class='item active'>
          <img src='$links[0]'>
             </div>
					";
					
					foreach($links as $x){
						echo "
						<div class='item '>
          <img src='$x'>
             </div>
					";
							
						
						}
					
					
						}		
			?>
            
            
            
            
      </div>
      <a class="left carousel-control" href="#projectCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#projectCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
  
  
  
    </div>
    </div>
 </div>



<?php
  require 'template/footer.php';
?>
