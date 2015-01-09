   <?php
			$a =  $_SERVER['SCRIPT_NAME'];
			if($a == "/ACM Website/index.php"){
				echo " <li class='active'><a href='index.php'>Home</a></li>
				 		<li><a href='about.php'>About</a></li>
            			<li><a href='contact.php'>Contact</a></li>
            			<li><a href='Events.php'>Events</a></li>
						
						
						
						
						
						
						
						
						<li class='dropdown'>
              <a href='#' class='dropdown-toggle' data-toggle='dropdown'>Projects<b class='caret'></b></a>
              <ul class='dropdown-menu'>
               
                <li><a href='project.php'>Projects</a></li>
                ";
                 
					
					if(isset($_SESSION['user'])){
							echo"
								<li><a href='reset.php'>Reset password</a></li>
                <li><a href='logout.php'>Log out</a></li>";
								
						}		
			"	
           </ul>
						
						
						
		
				";
			}else if($a == "/ACM Website/about.php"){
					echo " <li ><a href='index.php'>Home</a></li>
				 		<li class='active'><a href='about.php'>About</a></li>
            			<li><a href='contact.php'>Contact</a></li>
            			<li><a href='Events.php'>Events</a></li>
						
						
						<li class='dropdown'>
              <a href='#' class='dropdown-toggle' data-toggle='dropdown'>Projects<b class='caret'></b></a>
              <ul class='dropdown-menu'>
               
                <li><a href='project.php'>Projects</a></li>
                ";
                 
					
					if(isset($_SESSION['user'])){
							echo"
								<li><a href='reset.php'>Reset password</a></li>
                <li><a href='logout.php'>Log out</a></li>";
								
						}		
			"	
           </ul>
             			
				";
				}else if($a == "/ACM Website/contact.php"){
						
					echo " <li ><a href='index.php'>Home</a></li>
				 		<li ><a href='about.php'>About</a></li>
            			<li class='active' ><a href='contact.php'>Contact</a></li>
            			<li><a href='Events.php'>Events</a></li>
						
						
						<li class='dropdown'>
              <a href='#' class='dropdown-toggle' data-toggle='dropdown'>Projects<b class='caret'></b></a>
              <ul class='dropdown-menu'>
               
                <li><a href='project.php'>Projects</a></li>
                ";
                 
					
					if(isset($_SESSION['user'])){
							echo"
								<li><a href='reset.php'>Reset password</a></li>
                <li><a href='logout.php'>Log out</a></li>";
								
						}		
			"	
           </ul>
						
						
				";
					}else if($a == "/ACM Website/Events.php"){
						echo " <li ><a href='index.php'>Home</a></li>
				 		<li ><a href='about.php'>About</a></li>
            			<li  ><a href='contact.php'>Contact</a></li>
            			<li class='active'><a href='Events.php'>Events</a></li>
						
						
						<li class='dropdown'>
              <a href='#' class='dropdown-toggle' data-toggle='dropdown'>Projects<b class='caret'></b></a>
              <ul class='dropdown-menu'>
               
                <li><a href='project.php'>Projects</a></li>
                ";
                 
					
					if(isset($_SESSION['user'])){
							echo"
								<li><a href='reset.php'>Reset password</a></li>
                <li><a href='logout.php'>Log out</a></li>";
								
						}		
			"	
           </ul>
						
					
						
				";
				
					}else if($a == "/ACM Website/project.php"){
						echo " <li ><a href='index.php'>Home</a></li>
				 		<li ><a href='about.php'>About</a></li>
            			<li  ><a href='contact.php'>Contact</a></li>
            			<li ><a href='Events.php'>Events</a></li>
						
						
						<li  class='active' class='dropdown'>
              <a href='#' class='dropdown-toggle' data-toggle='dropdown'>Projects<b class='caret'></b></a>
              <ul class='dropdown-menu'>
               
                <li ><a href='project.php'>Projects</a></li>
                ";
                 
					
					if(isset($_SESSION['user'])){
							echo"
								<li><a href='reset.php'>Reset password</a></li>
                <li><a href='logout.php'>Log out</a></li>";
								
						}		
			"	
           </ul>
						
					
						
				";
						
						
						}else{
							
							echo " <li ><a href='index.php'>Home</a></li>
				 		<li ><a href='about.php'>About</a></li>
            			<li  ><a href='contact.php'>Contact</a></li>
            			<li ><a href='Events.php'>Events</a></li>
						
						<li  class='dropdown'>
              <a href='#' class='dropdown-toggle' data-toggle='dropdown'>Projects<b class='caret'></b></a>
              <ul class='dropdown-menu'>
               
                <li ><a href='project.php'>Projects</a></li>
                ";
                 
					
					if(isset($_SESSION['user'])){
							echo"
								<li><a href='reset.php'>Reset password</a></li>
                <li><a href='logout.php'>Log out</a></li>";
								
						}		
			"	
           </ul>
						
					
						
				";
							
							}
            	
			?>
           