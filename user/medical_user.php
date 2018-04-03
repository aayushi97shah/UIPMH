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
<?php
$uname=$_SESSION['user_patient'];


if(isset($_POST['submit']))
   {
    $case_id=$_POST['case_id'];
 
}



 $qry2="SELECT * FROM my_case WHERE Case_id=$case_id AND user_id='".$uname."'";
   $rs2 = mysqli_query($conn,$qry2);

 

  
if(mysqli_num_rows($rs2)>0)
 {
                                            
 while ($data=mysqli_fetch_assoc($rs2)) 
 {


    $case_id=$data['Case_id'];
   
    $doc_name=$data['doctor_id'];
    $rname=$data['rname_txt'];
   $medicine=$data['medname_txt'];
  }














$qry = "SELECT * FROM patient WHERE user_id='".$uname."'";
  //echo "$qry";
  $rs = mysqli_query($conn,$qry);
  if (mysqli_num_rows($rs) > 0)
  {
    $row = mysqli_fetch_assoc($rs);
    $name=$row['pname_txt'];




  }

   


 
  
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
        <h2>Medicine</h2>
                <ul class="breadcrumb pull-right">
                    <li><a href="index.php">Home</a></li>
                   <li></li>
                </ul>
      </div>
    </div>
  </div><!-- end post-wrapper-top -->
<form role="form" method="post" action="#" data-parsley-validate id="patient_reg_form">
  <div class="white-wrapper"><?php require "sidemenu_medical.php"; ?>
      <div class="container">
          <div class="general_row">
        <div class="custom_tab_2 row" style="background-color: #fafafa;     font-size: 20px !important;
    background-color: #fafafa;
    border-color: #21C2F8 !important;
  
    ";>
             
              <h3>Patient Name:<?php  

                                                echo "$name";
                                            ?>
                                             </h3>
              <h3>Doctor Name:<?php  

                                               $qry5="SELECT * FROM doctor WHERE user_id='".$doc_name."'"; 
                                   $rs = mysqli_query($conn,$qry5);
                              if (mysqli_num_rows($rs) > 0)
                                       {
                                      $row5 = mysqli_fetch_assoc($rs);
                                     $dname=$row5['dname_txt']; echo "$dname";}
                                            ?>
                                             </h3>
                             
                <h3>Case Id:
                 
                                <?php echo $case_id;?></h3>
                                             

                <h3>Medicines:</h3>
                 
                                
                                 <textarea cols="70" rows="4" style="color: #21C2F8;  padding-left:30px; " ><?php echo"$medicine";?></textarea> 
                      
<br><br><br><br>
                   
  </div></div></div></div>                          
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
 <?php }
else
{
  header('location:medical_id.php?er_ms=you have enter wrong case_id');
}


 
   
 
 
?>                


  <?php require "common/footer.php"; ?>                          
                            
    
   
    
  
