


<?php
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
        var atIndex = email.indexOf("@iwu.edu");

        if (user == null || user == "") {
            alert("Please enter name!");
        } else if (user.length > 20) {
            alert("The length of name is limited by 20!");
        } else if (email == null || email == "") {
            alert("Please enter Email!");
        } else if (atIndex == -1) {
            alert('Email address is invalid! Please end with @iwu.edu');
        } else if (subject == null || subject == "") {
            alert("Please enter subject!");
        } else if (subject.length > 20) {
            alert("The length of subject is limited by 20!"); 
        } else if (Message == null || Message == "") {
            alert("Please enter Massage!");
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

    
<form class="form-horizontal" role="form">
  <div class="form-group form-group-lg">
    <label class="col-sm-2 control-label" for="formGroupInputLarge" >Contact us</label>
    <div class="col-sm-10">
      <input class="form-control" type="text" id="user" name="user"  placeholder="Name">
    </div>
  </div>
  <div class="form-group form-group-lg">
    <label class="col-sm-2 control-label" for="formGroupInputLarge">Address: acm@iwu.edu</label>
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
