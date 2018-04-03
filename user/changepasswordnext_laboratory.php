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
    
      $("#laboratorynext_cp_form").on('submit',function(e){
      //  alert("hii");  //create an ajax request to load_page.php

        e.preventDefault();
        $.ajax({  
            type: "POST",
            url: "laboratory_cp_update.php",             
            data:new FormData(this), // "coun_id="+id, {}
            cache       : false,
            contentType : false,
            processData : false, //expect html to be returned                
            success: function(response){
             // alert(response);
            window.location.href = ''+response+'';
          //$('#display').html(response);         
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
				<h2>Change Password</h2>
                <ul class="breadcrumb pull-right">
                    <li><a href="index.php">Home</a></li>
                    <li></li>
                </ul>
			</div>
		</div>
	</div>

	<div class="white-wrapper">
    	<div class="container">
        	<div class="general_row">
				<div class="custom_tab_2 row">

                    <div class="col-md-12">
                        <div class="tab-content">
                            <div class="tab-pane active">
                            <div class="doc">
                            	<div class="big-title">
                            	<h3>New Information</h3>
                                </div>
                                <form role="form" method="post" action="#" data-parsley-validate id="laboratorynext_cp_form">

                                   

 									              <div class="form-group">
                                    <label for="exampleInputPassword1">New Password</label>
                                    <input type="password" name="n_password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                                  </div>
                                     <div class="form-group">
                                    <label for="exampleInputPassword1">Confirm Password</label>
                                    <input type="password" name="c_password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                                  </div> </div></div>
                                  <input type="submit" name="submit" class="btn btn-primary" value="submit">
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

  <?php require "common/bottom.php"; ?>

  <?php require "common/footer.php"; ?>                          
                            
    
   
    
	
