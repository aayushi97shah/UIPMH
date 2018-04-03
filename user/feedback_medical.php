<!DOCTYPE html>
<html lang="en">
  <?php
    
 session_start();

$uname=$_SESSION['common_user'];
?>
<?php require "common/header.php"; ?>
 <?php require "common/top1.php"; ?>
 <head>
<script src="js/jquery.js" type="text/javascript"></script>
   <script type="text/javascript">
  $(document).ready(function() {
    
      $("#feedback").on('submit',function(e){
        e.preventDefault();
        $.ajax({    //create an ajax request to load_page.php
            type: "POST",
            url: "feedback_insert.php",             
            data:new FormData(this), // "coun_id="+id, {}
            cache       : false,
            contentType : false,
            processData : false, //expect html to be returned                
            success: function(response){
          alert(response);
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
				<h2>Feedback</h2>
                <ul class="breadcrumb pull-right">
                    <li><a href="index.php">Home</a></li>
                    <li></li>
                </ul>
			</div>
		</div>

	</div><!-- end post-wrapper-top -->

	<div class="white-wrapper" style="background-color: #fff;">
 <?php require "sidemenu_medical.php";?>
    	<div class="container" >

        	<div class="general_row">

				<div class="custom_tab_2 row">
                  
                   <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
          <div class="big-title clearfix">
            <h3>Write Us</h3>
          </div><!-- end big title -->
                    <div class="contact_form">
                    <div id="message"></div>  <label>Profile Pic:</label>
                        <form  role="form" class="row online_form_builder_big" id="feedback">
                      
                        <div style="float: left;  padding-left: 20px;">
                         <div >
                                   
                                    <input type="file" name="fileToUpload">
                                    
                                    
                           </div>      
                        </div>
                      
                            <div class="col-lg-12" >
                                <label for="name">User ID</label>
                                <input type="text" class="form-control" id="name" placeholder="" name="user_id" readonly="" value="<?php echo "$uname"?> ">
                            </div>
                            <div class="col-lg-12">
                                <label for="email">User Name</label>
                                <input type="text" class="form-control" id="email" name="uname_txt" required autofocus data-parsley-pattern="^[a-zA-Z\s]*$" title="only character" pattern="^[a-zA-Z\s]*$">
                            </div>
                                
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                            <label for="comments">Your Message</label>
                            <textarea class="form-control" id="comments" name="post_txt" required></textarea>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                            <div >
                            <button type="submit" value="SEND" id="submit" class="btn btn-lg btn-primary pull-right" style="margin-left: 10px; ">SEND NOW</button>  </div>
                            <div > 
                            <input type="reset" value="RESET" name="reset" class="btn btn-lg btn-default pull-right" style="color:#21c2f8 !important;">
                            </div>   
                        </form>
                     </div>
        </div>
</div>
</div>
</div>
</div>
</div>
<!-- footer -->
  <?php require "common/bottom.php"; ?>

  <?php require "common/footer.php"; ?>                          
                            
    
   
    
	
