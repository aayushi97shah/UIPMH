<?php
session_start();
if(!isset($_SESSION['common_user']))
{
  header("location:index.php");
}
?>

<?php
  require 'connection.php';
  ?>

<!DOCTYPE html>
<html lang="en">
<?php require "common/header.php"; ?>
 <?php require "common/top1.php"; ?>
 <head>
<script src="js/jquery.js" type="text/javascript"></script>
   <script type="text/javascript">
 
  </script>

<title></title>
</head>
<body>

  

 <div class="animationload">
<div class="loader">Loading...</div>
</div>
                
  


  


 
 
  

  <div class="post-wrapper-top clearfix">
    <div class="container">
      <div class="col-lg-12">
        <h2>Add Medicine</h2>
                <ul class="breadcrumb pull-right">
                    <li><a href="index.php">Home</a></li>
                   <li></li>
                </ul>
      </div>
    </div>
  </div><!-- end post-wrapper-top -->
<form role="form" method="post" action="medical_user.php" data-parsley-validate id="patient_reg_form">
  <div class="white-wrapper"><?php require "sidemenu_medical.php"; ?>
      <div class="container">
          <div class="general_row">
        <div class="custom_tab_2 row" >
             <?php if(isset($_GET['er_ms']))
                                    {
                                        echo $_GET['er_ms'];
                                    }?>
              <h3>Case Id 
                 <input type="text" class="form-control" name="case_id"  placeholder="Enter Case Id" autofocus>
                                           
                                             </h3>
             
 <div class="form-group">
                                    
                                  <button type="submit" name="submit" class="btn btn-primary">submit </button>
                                    </div>

            </div></div></div></div><br><br>  <br><br> <br><br>      
                        
</form>
<!-- footer -->
  <!-- footer -->
  
  <!-- Main Scripts-->  <div class="copyright ">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="copyright-text">
                        <p>Copyright © 2017 - UIPMH Designed by Team Versatile</p>
                    </div><!-- end copyright-text -->
                </div><!-- end widget -->
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <div class="footer-menu">
                        <ul class="menu pull-right">
                            <li class="active"><a href="index.php">Home</a></li>
                             <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="about.php">About us</a></li>
                            <li><a href="counter.php">Report</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div><!-- end large-7 --> 
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end copyrights -->
    
    <div class="dmtop">Scroll to Top</div>
                 


  <?php require "common/footer.php"; ?>                          
                            
    
   
    
  



