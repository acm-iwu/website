<?php  session_start();
  require_once 'common/pages.php';

  $page = PAGE_CONTACT;

  require 'template/header.php';
?>

 
<script type="text/javascript">
    function Send() {
        var user = document.getElementById("user").value;
        var email = document.getElementById("email").value;
        var subject = document.getElementById("subject").value;
        var Message = document.getElementById("Message").value;
    
        if (user == "" || email == "" || subject == "" || Message == "" )
		{
			var c=0;
			if(user=="")
			{
				c++;
			}
			if(email=="")
			{
				c++;
			}
			if(subject=="")
			{
				c++;
			}
			if(Message=="")
			{
				c++;
			}
			
			if(c>1)
			{
			 alert("Please fill in all the required fields!");
			 return false;
			}
        } 
		 
		if (user == null || user == "") {
            alert("Please enter your name!");
			return false;
        } 
		if (user.length > 25) {
            alert("Please enter your real name!");
			return false;
        }
		 if (email == null || email == "") {
            alert("Please enter your Email!");
			return false;
        }
		if(email!="")
		{       //var x = document.forms["myform"]["email"].value;
				var atpos = email.indexOf("@");
				var dotpos = email.lastIndexOf(".");
				if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=email.length) {
					alert("Not a valid e-mail address");
					return false;
				}
		}
	
	 if (subject == null || subject == "") {
            alert("Please enter a Subject!");
			return false;
        } 
		 if (subject.length > 25) {
            alert("Title is limited to 25 character!"); 
			return false;
        } 
		if (Message == null || Message == "") {
            alert("Please enter a Message!");
			return false;
        } 
          document.getElementById('myform').submit();
        
    }
    
    function restart() {
        document.getElementById("user").value ="";
        document.getElementById("email").value="";
        document.getElementById("subject").value="";
        document.getElementById("Message").value="";
    }
</script>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Contact Us</h1>
            <p>To contact us please complete this form and we will reply to the email provided.</p>
            <br /><br />
    
<form class="form-horizontal" role="form" id="myform" method="post" action="contact.php">
  <div class="form-group form-group-lg">
    <label class="col-sm-2 control-label" for="formGroupInputLarge" >Contact us</label>

    <div class="col-sm-10">
      <input class="form-control" type="text" id="user" name="user"  placeholder="Name">
    </div>
  </div>
  <div class="form-group form-group-lg">
    <label class="col-sm-2 control-label" for="formGroupInputLarge">Email Address:</label>
    <div class="col-sm-10">
      <input class="form-control" type="text" id="email" name="email" value=""  placeholder="Email">
    </div>
  </div>
  <div class="form-group form-group-lg">
    <label class="col-sm-2 control-label" for="formGroupInputLarge"></label>
    <div class="col-sm-10">
      <input class="form-control" type="text" id="subject" name="subject" value="" placeholder="Subject">
    </div>
  </div>
  <div class="form-group form-group-lg">
   <label class="col-sm-2 control-label" for="formGroupInputLarge"></label>
   <div class="col-sm-10">
      <textarea class="form-control" rows="10" id="Message" name="Message" value="Message" placeholder="Message" style="height:auto"></textarea>
   </div>   
  </div>

  <div class="form-group form-group-lg" align=right>
   <label class="col-sm-2 control-label" for="formGroupInputLarge"></label>
   <div class="col-sm-10">
      <button  type="button" class="btn btn-primary" onclick="restart()">Reset</button>  
      <button style="margin-right:50px" type="button" class="btn btn-primary" onclick="Send()">Send</button>
   </div>   
   </div>                            

</form>  

</div>
    </div>
</div>

    
   <?php
   	require("send.php");
   ?>
   
   <script type="text/javascript" src="js/jquiry.js"></script>
   
    
</body>
</html>

<?php
  require 'template/footer.php';
?>
