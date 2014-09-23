<?php
  require_once 'common/pages.php';

  $page = PAGE_CONTACT;

  require 'template/header.php';
?>

<!-- Insert page body here. -->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<title>CONTACT US</title>
<link rel="stylesheet" type="text/css" href="css/register.css">
<script type="text/javascript">
    function Send() {
        var user = document.getElementById("user").value;
        var email = document.getElementById("email").value;
        var subject = document.getElementById("subject").value;
        var Message = document.getElementById("Message").value;

      if (user == "" && email == "" && subject == "" && Message == "" || user == null && email == null && subject == null && Message == null){
            alert("Please fill in all the required fields!")
        } else if (user == null || user == "") {
            alert("Please enter your name!");
        } else if (user.length > 25) {
            alert("Please enter your real name!");
        } else if (email == null || email == "") {
            alert("Please enter your Email!");
        }  else if (subject == null || subject == "") {
            alert("Please enter a Subject!");
        } else if (subject.length > 25) {
            alert("Title is limited to 25 character!"); 
        } else if (Message == null || Message == "") {
            alert("Please enter a Message!");
        } else {
            document.forms[0].submit();
        }
    }
    
    function restart() {
        document.getElementById("user").value ="";
        document.getElementById("email").value="";
        document.getElementById("subject").value="";
        document.getElementById("Message").value="";
    }
</script>

</head>

<body>
    
<form class="form-horizontal" role="form">
  <div class="form-group form-group-lg">
    <label class="col-sm-2 control-label" for="formGroupInputLarge" >Contact us</label>



    <div class="col-sm-10">
      <input class="form-control" type="text" id="user" name="user"  placeholder="Name">
    </div>
  </div>
  <div class="form-group form-group-lg">
    <label class="col-sm-2 control-label" for="formGroupInputLarge">Email Address: </br> (username@iwu.edu)</label>
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
      <button type="button" class="btn btn-primary" onclick="restart()">Reset</button>  
      <button type="button" class="btn btn-primary" onclick="Send()">Send</button>
   </div>   
   </div>                            

</form>  
    
</body>
</html>

<?php
  require 'template/footer.php';
?>