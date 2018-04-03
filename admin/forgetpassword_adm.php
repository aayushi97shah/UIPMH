<?php session_start();
?>

<?php
?>

<!DOCTYPE html>
<html lang="en">

<?php require "common/header.php"; ?>

 <head>
<script src="js/jquery.js" type="text/javascript"></script>
   <script type="text/javascript">
  $(document).ready(function() {
    
      $("#patient_cp_form").on('submit',function(e){
      //  alert("hii");  //create an ajax request to load_page.php

        e.preventDefault();
        $.ajax({  
            type: "POST",
            url: "fp_adm_check.php",             
            data:new FormData(this), // "coun_id="+id, {}
            cache       : false,
            contentType : false,
            processData : false, //expect html to be returned                
            success: function(response){
            if(($.trim(response))=='forgotpassword_adm_next.php')
          {
            alert("now enter another detail");
             window.location.href='forgetpassword_adm_next.php';
          }
          else
          {
            alert("not valid user");
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
<div>
	<div class="post-wrapper-top clearfix">
		<div class="container">
			<div class="col-lg-12">
				<h2>Forget Password</h2>
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
                            	<h3>Information</h3>
                                </div>
                                <form role="form" method="post" action="#" data-parsley-validate id="patient_cp_form">

                                    <div class="form-group">
                                    <label for="exampleInputEmail1">User Id</label>
                                    <input type="email" name="user_id" class="form-control" id="exampleInputEmail1" placeholder="Enter User Id"   required>
                                  </div>


                                  </div></div>
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
                            
    
   
    
	
