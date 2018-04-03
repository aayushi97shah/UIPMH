<?php session_start(); 
if(!isset($_SESSION['common_user']))
{
  header("location:index.php");
}
if(!isset($_SESSION['user_patient']))
  {
    header("location:existingdoctor.php");
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
  $(document).ready(function() {
    
      $("#patient_reg_form").on('submit',function(e){
        e.preventDefault();
        $.ajax({    //create an ajax request to load_page.php
            type: "POST",
            url: "mycase_doctor_insert.php",             
            data:new FormData(this), // "coun_id="+id, {}
            cache       : false,
            contentType : false,
            processData : false, //expect html to be returned                
            success: function(response){
          alert(response);
          if((''+response+'')=='mycase_doctor.php')
          {
            alert("inserted successfully");
             window.location.href=''+response+'';
          }
          else
          {
            alert("not successfully");
             window.location.href=''+'#'+'';
          }
                
            }
            

        });
      });
});

  </script>

<title></title>
</head>
<body>

   <?php
$uname=$_SESSION['user_patient'];
$qry = "SELECT * FROM patient WHERE user_id='".$uname."'";
  //echo "$qry";
  $rs = mysqli_query($conn,$qry);
  if (mysqli_num_rows($rs) > 0)
  {
    $row = mysqli_fetch_assoc($rs);
    $name=$row['pname_txt'];
  }
//echo "$name";
?>

 <div class="animationload">
<div class="loader">Loading...</div>
</div>
                
    
	

	<div class="post-wrapper-top clearfix">
		<div class="container">
			<div class="col-lg-12">
				<h2>My Case</h2>
                <ul class="breadcrumb pull-right">
                    <li><a href="doctor_dashboard.php">Home</a></li>
                   <li></li>
                </ul>
			</div>
		</div>
	</div><!-- end post-wrapper-top -->

	<div class="white-wrapper" style="margin-top:40px !important; margin-bottom:50px !important;"> <?php require "sidemenu_doctor.php" ?>
    	<div class="container">  
        	<div class="general_row">
				<div class="custom_tab_2 row" >

   
                    <div class="col-md-12" style="float:left">
                        <div class="tab-content">
                            <div class="tab-pane active">
                            <div class="doc">

                                                <h3>Patient Name:<?php  

                                                echo "$name";
                                            ?>
                                             </h3>


                            	<!-- <div class="big-title"> -->






                            	<h3>case <?php  $cnt=0;
                                                require 'connection.php';
                                  $sel="SELECT * FROM my_case WHERE user_id='".$uname."'";
                                                    $rs=mysqli_query($conn,$sel);
                                                 if($rs)
                                                {
                                                    if(mysqli_num_rows($rs)>0)
                                                    {
                                            
                                                while ($data=mysqli_fetch_assoc($rs)) 
                                                {
                                           
                                                    $cnt++;

                                           
                                                }
                                                echo $cnt+1
                                                ;
                                                }
                                                else
                                                {
                                                	$ans=1;
                                                	 echo $ans;
                                                }
                                                }
                                                else
                                                {
                                                    echo "connection error";
                                                }
                                            ?>
                                             </h3>
                                <!-- </div> -->
                                <form role="form" method="post" action="#" id="patient_reg_form">
                                   <div class="form-group">
                                   <label>Date Of Disease</label>
                           
                            <input type="date" name="date_disease" required>
                            </div>
                            
                        </div>




                                  <div class="form-group">
                                 <label>Name Of Disease</label>
                                  <input type="text" class="form-control" name="disname_txt" id="full_name" placeholder="Enter Disease Name" required data-parsley-pattern="^[a-zA-Z\s]*$" title="only character" pattern="^[a-zA-Z\s]*$"  autofocus>
                                    </div>
                                  <label>Medicines</label>
                                   <div class="form-group">
                                  
                                  <textarea  rows="5" cols="110" name="medname_txt" required autofocus data-parsley-pattern="^[a-zA-Z0-9,\s]*$" title="only characters & numbers" pattern="^[a-zA-Z,0-9\s]*$"></textarea >
                                  
                                    </div>

                                   <label>Report Name</label>
                                  <div class="form-group">
                                 <textarea  rows="5" cols="110" name="report_name"></textarea >
                                    </div>  


                                    <label>Description</label>
                                  <div class="form-group">
                                 <textarea  rows="5" cols="110" name="description"></textarea >
                                    </div>  
 
                      <button type="submit" name="submit" class="btn btn-primary">submit </button>
                                  <button type="reset" name="reset" class="btn btn-default" style="color: #48c0de">Reset</button>
                                </form>
                               </div></div></form></div></div>
</div>
</div>
</div>
</div>
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
                            
    
   
    
	
