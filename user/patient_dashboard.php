
  <?php session_start(); 
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
 <?php 
$u_id=$_SESSION['user_patient']; $cnt1=0;                                          require 'connection.php';
?><?php
  $sel1="SELECT * FROM patient WHERE user_id='".$u_id."'";
                                                    $rs1=mysqli_query($conn,$sel1);
                                                 if($rs1)
                                                {
                                                    if(mysqli_num_rows($rs1)>0)
                                                    {
                                            
                                             $data1=mysqli_fetch_assoc($rs1);
                                                
                                                 $img=$data1['profile_pic'];
                                                 $pname=$data1['pname_txt'];
                                                  
                                                }
                                              }
                                              ?>
<?php
                                  $sel="SELECT * FROM my_case WHERE user_id='".$u_id."'";
                                                    $rs=mysqli_query($conn,$sel);
                                                 if($rs)
                                                {
                                                    if(mysqli_num_rows($rs)>0)
                                                    {
                                            
                                                while ($data=mysqli_fetch_assoc($rs)) 
                                                {
                                           
                                                    $cnt1++;

                                           
                                                }
                                             }
                                             }

                                    
                                            ?>
<!-- Allergy -->
          <?php $cnt2=0;
                                                require 'connection.php';
                                  $sel="SELECT * FROM user_allergy WHERE user_id='".$u_id."'";
                                                    $rs=mysqli_query($conn,$sel);
                                                 if($rs)
                                                {
                                                    if(mysqli_num_rows($rs)>0)
                                                    {
                                            
                                                while ($data=mysqli_fetch_assoc($rs)) 
                                                {
                                           
                                                    $cnt2++;

                                           
                                                }
                                             }
                                             }

                                    
                                            ?>                                      


<!-- 
Vaccinatiion -->
   <?php $cnt3=0;
                                                require 'connection.php';
                                  $sel="SELECT * FROM user_vaccination WHERE user_id='".$u_id."'";
                                                    $rs=mysqli_query($conn,$sel);
                                                 if($rs)
                                                {
                                                    if(mysqli_num_rows($rs)>0)
                                                    {
                                            
                                                while ($data=mysqli_fetch_assoc($rs)) 
                                                {
                                           
                                                    $cnt3++;

                                           
                                                }
                                             }
                                             }

                                             
                                            ?>


                                            

                                          

<script src="js/jquery.js" type="text/javascript"></script>
   

<title></title>
</head>
<body>

  

 <div class="animationload">
<div class="loader">Loading...</div>
</div>
                
  




   


<div class="post-wrapper-top clearfix">
		<div class="container">
			<div class="col-lg-12">
				<h2>Dashboard</h2>
                <ul class="breadcrumb pull-right">
                    <li><a href="index.php">Home</a></li>
                   <li></li>
                </ul>
			</div>
		</div>
	</div>
  <div class="white-wrapper" ><?php require"sidemenu.php";?>
  <center><div style="margin-top:20px;" >
   <img src="upload/<?php  echo "$img"; ?>" style="width: 150px; height:150px;" class="img-circle img-thumbnail" alt=""></div>
   <div style="margin-top:20px;" data-transition="fade" data-slotamount="7" data-masterspeed="1500"  class="tp-caption big_title_slider customin customout start"
                        >
                        <?php $name=ucwords($pname," ");?>
                         <span style="border-radius: 15px;padding: 10px 10px;background-color: #dddddd;font-size:40px !important;"> <?php echo "$name";?></span><br><br>
                          Welcome To UIPMH
                        </div>
</center>


  <div style="margin-top:20px;" class="col-lg-12">
  <div class="custom-overlay">
          <div class="container">
        <div class="stat f-container">
          <div class="f-element col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="milestone-counter">
                          <i class="fa fa-file-text fa-5x"></i>
                            <span class="stat-count highlight"><?php echo "$cnt1";?></span>
                            <div class="milestone-details">Cases</div>
            </div>
          </div>
          <div class="f-element col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="milestone-counter">
                          <i class="fa fa-sitemap fa-bug  fa-5x"></i>
                            <span class="stat-count highlight"><?php echo "$cnt2";?></span>
                            <div class="milestone-details">Allergy</div>
            </div>
          </div>
          <div class="f-element col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="milestone-counter">
                          <i class="fa fa-heart-o fa-5x"></i>
                            <span class="stat-count highlight"><?php echo "$cnt3";?></span>
                            <div class="milestone-details">Vaccination</div>
            </div>
          </div>
          <!-- stat -->
            </div><!-- end container -->
      </div>
</div>
 </div>

</div>

  <?php require "common/bottom.php"; ?>    
  <?php require "common/footer.php"; ?>   

  <script type="text/javascript">


  </script>                       
