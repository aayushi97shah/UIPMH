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
    
      $("#doctornext_cp_form").on('submit',function(e){
      //  alert("hii");  //create an ajax request to load_page.php

        e.preventDefault();
        $.ajax({  
            type: "POST",
            url: "fp_doctor_next_check.php",             
            data:new FormData(this), // "coun_id="+id, {}
            cache       : false,
            contentType : false,
            processData : false, //expect html to be returned                
            success: function(response){
              alert(response);
              if(($.trim(response))=='changepasswordnext_doctor.php')
          {
            alert("now change your password");
             window.location.href='changepasswordnext_doctor.php';
          }
          else
          {
            alert("sorry! wrong information");
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

  

 <div class="animationload">
<div class="loader">Loading...</div>
</div>
                
    
	

	<div class="post-wrapper-top clearfix">
		<div class="container">
			<div class="col-lg-12">
				<h2>Forgot Password??</h2>
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
                            	<h3>Sequrity Information</h3>
                                </div>
                                <form role="form" method="post" action="#" data-parsley-validate id="doctornext_cp_form">
                                    <div class="form-group">
                                
 <?php
                                   require 'connection.php';
                                   $up=$_SESSION['user_doctor'];
                                   $sel15="SELECT * FROM doctor WHERE user_id='".$up."'";
  $rs15=mysqli_query($conn,$sel15);
  
$data15=mysqli_fetch_assoc($rs15);
                                   $sel="SELECT * FROM sequrity_question WHERE isactive=1"; 
                                   $rs=mysqli_query($conn,$sel);
                                   // $cnt=1;
                                   $ab=$data15['sq_id'];
                                                       $sel1="SELECT * FROM sequrity_question WHERE sq_id=$ab";
                                                    $rs1=mysqli_query($conn,$sel1);
                                                    $data1=mysqli_fetch_assoc($rs1);?>
                                  <label>Security Question</label>
                                  <input type="text" class="form-control" readonly="" name="sque_txt" id="sanswer" placeholder="security answer (required)" value="<?php echo $data1['question']; ?>"  data-parsley-pattern="^[a-zA-Z0-9?\s]*$" title="only characters & numbers" pattern="^[a-zA-Z0-9?\s]*$" >
                                    </div> 
                                   

                                    <div class="form-group">
                                

                                  <label>Security Answer</label>
                                  <input type="text" class="form-control" name="sanswer_txt" id="sanswer" placeholder="security answer (required)" required autofocus data-parsley-pattern="^[a-zA-Z0-9\s]*$" title="only characters & numbers" pattern="^[a-zA-Z0-9\s]*$" >
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
<br>
<br>
<br>
  <?php require "common/bottom.php"; ?>

  <?php require "common/footer.php"; ?>                          
                            
    
   
    
	
