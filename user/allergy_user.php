<?php
session_start();
if(!isset($_SESSION['common_user']))
{
  header("location:index.php");
}
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
            url: "uallergy_insert.php",             
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
				<h2>Add Allergy</h2>
                <ul class="breadcrumb pull-right">
                    <li><a href="patient_dashboard.php">Home</a></li>
                   <li></li>
                </ul>
			</div>
		</div>
	</div><!-- end post-wrapper-top -->

	<div class="white-wrapper"><?php require 'sidemenu.php'; ?>
    	<div class="container">
        	<div class="general_row">
				<div class="custom_tab_2 row" style="margin-top:10px !important; margin-bottom:10px !important;">
                    <div class="col-md-12" style="margin-top:40px; ">
                        <div class="tab-content">
                            <div class="tab-pane active">
                            <div class="doc">
                            	<!-- <div class="big-title"> -->
                            	<h3>Allergy Information</h3>
                                <!-- </div> -->
                                <form role="form" method="post" action="#" data-parsley-validate id="patient_reg_form">
                                 

                                  <div class="form-group">
                                    
                              
                                      <?php
                                                require 'connection.php';
                                                  $sel="SELECT * FROM allergy";
                                                    $rs=mysqli_query($conn,$sel);
                                                 if($rs)
                                                {
                                                    if(mysqli_num_rows($rs)>0)
                                                    {
                                            ?>
                                                <div class="form-group">
                                                
                                                <select class="form-control" name="allergy_name">
                                                <option selected value="no selcect">Select allergy name </option>
                                            <?php   
                                                while ($data=mysqli_fetch_assoc($rs)) 
                                                {
                                            ?>
                                                    <option value="<?php echo $data['allergy_id'];  ?>">
                                                    <?php echo $data['aname_txt']; ?>
                                                    </option>

                                            <?php
                                                }
                                                }
                                                }
                                                else
                                                {
                                                    echo "connection error";
                                                }
                                            ?>
                                             </select>
                                    </div>
</div></div>
                                  <button type="submit" name="submit" class="btn btn-primary" >Submit</button>
                                  <button type="reset" name="reset" class="btn btn-default" style="color: #48c0de">Reset</button>
                                </form>
                               </div></div></form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<br>
<br>
<br>
<br>
<!-- footer -->
  
  <!-- Main Scripts-->  <div class="copyright">
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
                            
    
   
    
	
