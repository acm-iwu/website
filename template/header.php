<?php

  require_once 'config.php';
	
  if (!isset($page)) {
    throw new RuntimeException('You must set the page before including the header.');
  }
  require_once 'common/db.php';
 
?>

<!doctype html>
<html>
  <head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
	 
    <title>IWU ACM</title>

    <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

    <!-- <link href="template/css/customacm.css" rel="stylesheet"> -->
    <link href="css/style.css" rel="stylesheet">
   <link href="css/carousel.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style type="text/css">


    </style>
  </head>
  
  
	<script type="text/javascript" src="../js/jquiry.js"></script>
    <script type="text/javascript" src="../js/js.js"></script>
  <body>
   
   
    <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">IWU ACM</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
           
       	<?php
        	require("check.php");
		?>
           
        </div><!--/.nav-collapse -->
      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <?php 
	 $page=basename($_SERVER['PHP_SELF']); 
      $page = array_shift(explode('.', $page));
		if($page=="index" || $page=="")
		{								   
	?>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="container">
    
      <!-- Indicators -->
      <ol class="carousel-indicators">
         <?php
		 
      	 $query = "select * from `photo` order by `no` DESC limit 10 ";
		$result = mysql_query($query);
		
		$r = mysql_num_rows($result);
		/*	if($r == 1){
					echo "
						<li data-target='#projectCarousel' class='active' data-slide-to='0'></li>
					";
					
			}else if($r > 1){
				echo "
						<li data-target='#projectCarousel' class='active' 					  	data-slide-to='0'></li>
					"; */
					for($i=0;$i<$r; $i++){
					?>
						<li data-target='#myCarousel' data-slide-to='<?php echo $i; ?>' class="<?php if($i==0){ echo "active";} ?>"></li>
					<?php
				} 
				?>
	  </ol>
      <div class="carousel-inner">
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
			
		
                  </div>
  <!--    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a> -->
    </div>
  </div>  
    <!-- /.carousel -->
  
  
 
    <div id="join">
    <form method="post" action="<?php $_SERVER['SCRIPT_NAME'] ?>">
    	<input class="form-control" required type="text" name="name" placeholder="Enter your name"><br>
        <input class="form-control" type="email" required name="email" placeholder="Enter your email"><br>
         <input class="form-control" type="password" required name="password" placeholder="Set Password for your account"><br>
        
        <input type="submit"  class="btn btn-primary" name="submit">
        <input type="button"  class="btn btn-primary" name="Skip" value="Join Later" onClick="hide()">
        </form>
    </div>
   
    <style>
	#join{ display:none; position:absolute; top:100px; left:450px; }

	</style>
     <script type="text/javascript">
	function join(){
			document.getElementById('join').style.display = "block";
		}
		function hide(){
			document.getElementById('join').style.display = "none";
			}
		
</script>
    <?php
    	
		if(isset($_POST['name'])&&(isset($_POST['email'])) && isset($_POST['password'])){
				if(!empty($_POST['name']) && !empty($_POST['email'])&& !empty($_POST['password'])){
					$name = mysql_real_escape_string($_POST['name']);
					$email = mysql_real_escape_string($_POST['email']);
					$pass = mysql_real_escape_string($_POST['password']);
					$query = "insert into `join` values('', '$name', '$email','$pass')";
				
					mysql_query($query) or die("<script type='text/javascript'>
						alert('There was an error ');
					</script>");
					echo "
					<script type='text/javascript'>
						alert('Signed up successfully');
					</script>
					";
					
				}else{
						echo"<script type='text/javascript'>
						alert('Please fill all the fields');
					</script>";
					}
			}
				
}

?>

 
