<?php
session_start();
  require_once 'common/pages.php';

  $page = PAGE_PROJECTS;

  require 'template/header.php';
  
?>
   
<div id="fixed-bar" class="container">
    <div class="col-md-12">
    <h2>President Emertrius</h2>
    <h4>Past Officers</h4>
    <div class="members">
        <center><img style="width: 60px; height: 60px;" src="pictures/unknown.png"></center>
        <h5>Unknown</h5>
    </div>
    <div class="members">
    <span style="margin-bottom: 15px; color: #444" class="glyphicon glyphicon-arrow-down"></span>
        <center><img style="width: 60px; height: 60px;" src="http://highflextech.com/website-master/pictures/alan.png"></center>
        <h5>Alan Russian</h5>
    </div>
    </div>
</div>



<div class="container center-content">
    <div class="row" style="margin-bottom: 20px; padding-bottom: 5px; border: none;">
        <div class="col-md-12">
        <h1>Officers</h1>
        <p>The officers of IWU ACM!</p>
        </div>
    </div>
    <div class="members">
        <div class="member row">
            <div class="col-md-1"><center><img src="pictures/tanner.jpg" class="img-circle"></center> </div>
            <div class="col-md-5"><h3>Minh Nguyen </h3><p>President</p></div>
            <div class="col-md-2"><a href="mailto:mnguyen3@iwu.edu" class="btn btn-default"> <span class="glyphicon glyphicon-send"></span> Email Minh</a></div>
        </div>
        <div class="member row">
            <div class="col-md-1"><center><img src="pictures/linhb.jpg" class="img-circle"></center></div>
            <div class="col-md-5"><h3>Ania Bui</h3><p>Vice President</p></div>
           <div class="col-md-2"><a href="mailto:lbui@iwu.edu" class="btn btn-default"> <span class="glyphicon glyphicon-send"></span> Email Ania</a></div>
        </div>
    </div>
    <div class="row" style="margin-bottom: 20px; padding-bottom: 5px; border: none;">
        <div class="col-md-12">
        <h1>Members</h1>
        <p>The members of IWU ACM!</p>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="copy col-md-6">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Copyright &copy; IWU ACM 2015</div>
        <div class="col-md-6" style="text-align: right">Designed by Wesleyan ACM</div>
    </div>
</footer>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="template/js/bootstrap.min.js"></script>
      <script src="js/bootstrap-hover.js"></script>
   
    <script>
    $('.dropdown-toggle').dropdownHover(options);
    </script>
    </div>
  </body>
</html>
