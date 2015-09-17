<?php session_start();
  require_once ('/home/acm/public_html/website/config.php');

  $page = PAGE_HOME;

  require 'template/header.php';
?>

<div class="container">
    <div class="about row">
        <div class="col-md-6">
            <h1>Description</h1>
            <p>Hi, We are the Association of Computing Machinery's chapter of Illinois Wesleyan University. We carry out our missions through conferences, publications, educational program, public awareness activities, and special interest groups.</p>
            <p>ACM unites the world's computing educators, researchers and professionals to inspire dialogue, share resources and address the field's challenges. ACM strengthens the profession's collective voice through strong leadership, promotion of the highest standards, and recognition of technical excellence.</p>
            <p>We support the professional growth of our members by providing opportunities for life-long learning, career development, and professional networking.</p>
        </div>
        <div class="col-md-6">
            <h1>About Us and Mission</h1>
            <p>ACM is an academic organization focused on Computer Science. ACM unites the world's computing educators, researchers and professionals from all sectors of computing sciences and their applications, from the design and construction of computers to the development of appropriate programming theory and languages and the utilization of computers in scientific investigation, industrial control, management data processing, and the humanities.</p>
            <p>We inspire dialogues, share resources and address the field's challenges. We strive to strengthen the profession's collective voice through strong leadership, promotion of the highest standards, and recognition of technical excellence. We support the professional growth of our members by providing opportunities for life-long learning, career development, and professional networking.</p>
        </div>
    </div>

    <!--
    <div class="officers row">
        <div class="col-md-6">
            <img src="http://highflextech.com/website-master/pictures/alan.png" class="img-circle">
            <h3><b>Alan Russian</b></h3>
            <h4>President</h4>
            <h4>arussian@iwu.edu</h4>
        </div>
        <div class="col-md-6">
            <img src="http://highflextech.com/website-master/pictures/jeremy.jpg" class="img-circle">
            <h3><b>Jeremy Albert</b></h3>
            <h4>Chief of Staff</h4>
            <h4>jalbert@iwu.edu</h4>
        </div>
    </div>
    -->
    
</div>

<?php
  require 'template/footer.php';
?>
