   <?php
			//$a =  $_SERVER['SCRIPT_NAME'];
			//echo $a;
			 $page=basename($_SERVER['PHP_SELF']); 
                                           $a = array_shift(explode('.', $page));
										  
										   ?>
                                           
                         <li <?php if($a=='index' || $a=='') { ?> class='active' <?php } ?> ><a href='index.php'>Home</a></li>
				 	<?php /* ?>	<li <?php if($a=='about' ) { ?> class='active' <?php } ?> ><a href='about.php'>About</a></li> <?php */ ?>
            			<li <?php if($a=='members' ) { ?> class='active' <?php } ?> ><a href='members.php'>Members</a></li>
                        <li <?php if($a=='contact' ) { ?> class='active' <?php } ?> ><a href='contact.php'>Contact</a></li>
            			<li <?php if($a=='events' ) { ?> class='active' <?php } ?>><a href='events.php'>Events</a></li>
						
						
												
						<li class='dropdown'>
                     <!--     <a href='project.php' class='dropdown-toggle' data-hover="dropdown" data-toggle='dropdown'>Projects<b class='caret'></b></a> -->
                       <a href='project.php' class='dropdown-toggle' data-hover="dropdown"  data-delay="1000" data-close-others="false">Projects<b class='caret'></b></a>
                        <ul class='dropdown-menu'>
                          <?php  
						    $query = "select * from `projectname` order by `id` desc";
		                    $result = mysql_query($query);
							while($data=mysql_fetch_array($result))
							{
						  ?>
                             <li><a href='projects.php?id=<?php echo $data['id']; ?>'><?php echo $data['name'];?></a></li> 
                             
                           <?php  } ?>  
                  </ul>
              
              <?php   if(isset($_SESSION['user'])){ ?>
              
                <li <?php if($a=='reset' ) { ?> class='active' <?php } ?>><a  href='reset.php'>Reset password</a></li>
                <li><a href='logout.php'>Log out</a></li>
                
              <?php }?> 
              
                                            
		
