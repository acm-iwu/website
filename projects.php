<?php
session_start();

  require_once 'common/pages.php';

  $page = PAGE_PROJECTS;

  require 'template/header.php';
  
  ?>
  
<div class="container">
    <div class="row">


<?php

require_once 'config.php';
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
          <h1><?php 
		  	echo $name;
		  ?></h1>
          <p style="word-break:break-all"><?php
          	echo $description;
		  ?></p>
          <h3>Contributors:</h3>
         
          	<?php
            	 $query = "select * from `worker` where `id` = '$id'";
		$result = mysql_query($query);
		
		if($result){
			
			while($row = mysql_fetch_assoc($result)){
				
						echo  "<p> <a hre='#' style='text-decoration:none'>".$worker = $row['name']."</a> <p>";
					 	
					
				}
			}else{
					echo "no data found";
				}
			?>
          
          
        </div>
        
        
        
        <div class="row">
   
  <div class="col-md-6">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
     <div class="container" style="max-width: 100%; padding: 0;">
      <!-- Indicators -->
 
 
      <ol class="carousel-indicators">
      
      <?php
      	 $query = "select * from `photo` where `id` = '$id'";
		$result = mysql_query($query);
	?>
		<?php 
	  for($i=0;$i<$result; $i++){
					?>
						<li data-target='#myCarousel' data-slide-to='<?php echo $i; ?>' class="<?php if($i==0){ echo "active";} ?>"></li>
					<?php
				} 
				?>
      </ol>
      <div class="carousel-inner" role="listbox">
          <?php
		 $c=0;
        	while($row = mysql_fetch_array($result)){
				$c++;
			?>
			<div class='item <?php if($c==1){ echo "active";} ?>'  >
            
          <img src='<?php echo $row[link] ?>'>
          
          
		  <div class='container'>
            <div class='carousel-caption'>
              
            
          <!--   <p><a class='btn btn-lg btn-primary'  id='join_today' href='#' onClick='join()'  role='button'>Join Today </a></p>  -->
            </div>
          </div>
             </div>
			 
		<?php 	} ?>
        
            <!-- <div class="container">
                <div class="carousel-caption">
                    <p>Description text can go here :)</p>
                </div>
            </div>-->
           </div> 
            
            
      </div>
  </div> 
  
    </div>
    </div>
 </div>

</div>
</div>


<?php
  require 'template/footer.php';
?>
