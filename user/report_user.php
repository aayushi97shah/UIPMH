<?php session_start();
if(!isset($_SESSION['common_user']))
{
  header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<?php require "common/header.php"; ?>
 <?php require "common/top.php"; ?>
 <head>
<script src="js/jquery.js" type="text/javascript"></script>
   <script type="text/javascript">
  $(document).ready(function() {
    
      $("#patient_reg_form").on('submit',function(e){
        e.preventDefault();
        $.ajax({    //create an ajax request to load_page.php
            type: "POST",
            url: "emnem.php",             
            data:new FormData(this), // "coun_id="+id, {}
            cache       : false,
            contentType : false,
            processData : false, //expect html to be returned                
            success: function(response){
          alert(response);
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

	<div class="white-wrapper"></div> <?php require "sidemenu_labo.php"; ?>
    	<div class="container">
        	<div class="general_row">
				<div class="custom_tab_2 row" >

                    <div class="col-md-12" >
                        <div class="tab-content">
                            <div class="tab-pane active">
                            <div class="doc">
                            	
                            	<h1 style="font-weight: bolder;">Report</h1>
                               <h5>Patient Name:<?php  

                                                
                                            ?>
                                             </h5>
                                              <h5>Doctor Name:<?php  

                                               
                                            ?>
                                             </h5>
                                             </h5>
                                              <h5>Laboratory Name:<?php  

                                                //echo "$name";
                                            ?>
                                             </h5>
                                <!-- </div> -->
                                <form role="form" method="post" action="#" data-parsley-validate id="patient_reg_form">
                                   <div class="form-group">
                                  
                                  <label>Report Name</label>
                                  <input type="text" class="form-control" name="lname" id="full_name" placeholder="Enter Report Name" required autofocus data-parsley-pattern="^[a-zA-Z]*$" title="only character" pattern="^[a-zA-Z]*$" readonly="">
                                    </div>
                                    <label>Report Result</label>
                                    <div class="form-group">
                                  
                                  <textarea  rows="5" cols="160"></textarea>
                                  <div class="form-group">
                                    <label for="exampleInputFile">Select Report</label>
                                    <input type="file" name="fileToUpload">
                                  </div>
                                    </div>
                                  

                      <input type="submit" name="submit" class="btn btn-primary" value="Submit">
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
                            
    
   
    
	
