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
 <head>
<script src="js/jquery.js" type="text/javascript"></script>
   <script type="text/javascript">
  $(document).ready(function() {
    
      $("#patient_reg_form").on('submit',function(e){
        e.preventDefault();
        $.ajax({    //create an ajax request to load_page.php
            type: "POST",
            url: "upload_report_insert.php",             
            data:new FormData(this), // "coun_id="+id, {}
            cache       : false,
            contentType : false,
            processData : false, //expect html to be returned                
            success: function(response){
          //alert(response);
          if($.trim(response)=='upload_report.php')
          {
            alert("inserted successfully");
          }
          else
          {
            alert("not successfully");
          }
         // $('#display').html(response);         
            }
            

        });
      });
});
  </script>

<title></title>
</head>
<body>

  

 <div class="animationload">
<div class="loader">Loading...</div>
</div>
                
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


  


 
  $qry2="SELECT * FROM my_case WHERE user_id='".$uname."'";
   $rs2 = mysqli_query($conn,$qry2);

  
if(mysqli_num_rows($rs2)>0)
 {
                                            
 while ($data=mysqli_fetch_assoc($rs2)) 
 {


    $case_id=$data['Case_id'];
   
    $doc_name=$data['doctor_id'];
  }

}


?>  
	

	<div class="post-wrapper-top clearfix">
		<div class="container">
			<div class="col-lg-12">
				<h2>Add Report</h2>
                <ul class="breadcrumb pull-right">
                    <li><a href="index.php">Home</a></li>
                   <li></li>
                </ul>
			</div>
		</div>
	</div><!-- end post-wrapper-top -->
<form role="form" method="post" action="#" data-parsley-validate id="patient_reg_form">
	<div class="white-wrapper"><?php require "sidemenu.php"; ?>
    	<div class="container">
        	<div class="general_row">
				<div class="custom_tab_2 row" >
             
              <h3>Patient Name:<?php  

                                                echo "$name";
                                            ?>
                                             </h3>
                             
                <h3>Case Id:</h3>
                
                                  <input type="text" class="form-control" name="case_id" id="full_name" value="<?php echo $case_id;?>" readonly="">
                <h3>Reports:</h3>
                
                                  <textarea name="reports" readonly="" > <?php  $qry4="SELECT * FROM my_case WHERE case_id='".$case_id."'"; 
                                   $rs = mysqli_query($conn,$qry4);
                              if (mysqli_num_rows($rs) > 0)
                                       {
                                      $row4 = mysqli_fetch_assoc($rs);
                                     $rname=$row4['rname_txt']; echo "$rname";}?></textarea>                                             

 
                    

              
  <div class="form-group">
                                 <label>Report Name</label>
                                  <input type="text" class="form-control" name="report_name" id="full_name" placeholder="Enter Report Name from previous field" required  data-parsley-pattern="^[a-zA-Z0-9\s]*$" title="only character" pattern="^[a-zA-Z0-9\s]*$">
                                    </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Add Report</label>
                                    <input type="file" name="fileToUpload">
                                  </div>
                                  <button type="submit" name="submit" class="btn btn-primary">submit </button>
                                    </div>

                      
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
                             <li><a href="#">Gallery</a></li>
                            <li><a href="about.php">About us</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div><!-- end large-7 --> 
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end copyrights -->
    
    <div class="dmtop">Scroll to Top</div>
                 


  <?php require "common/footer.php"; ?>                          
                            
    
   
    
	
