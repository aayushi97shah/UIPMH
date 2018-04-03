<!DOCTYPE html>
<html lang="en">

<?php require "common/header.php"; ?>
 <?php require "common/top.php"; ?>
<head>
<script src="js/jquery.js" type="text/javascript"></script>
   <script type="text/javascript">
  $(document).ready(function() {
    
      $("#docreg").on('submit',function(e){
        e.preventDefault();
        $.ajax({    //create an ajax request to load_page.php
            type: "POST",
            url: "verify_process_doctor.php",             
            data:new FormData(this), // "coun_id="+id, {}
            cache       : false,
            contentType : false,
            processData : false, //expect html to be returned                
            success: function(response){
         alert(response);

          if(($.trim(response))=='login_doctor.php')
          {
            alert("inserted successfully");
             window.location.href='login_doctor.php';
          }
          else
          {
            alert("user id or code may wrong");
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
        <h2>Verification</h2>
                <ul class="breadcrumb pull-right">
                    <li><a href="index.php">Home</a></li>
                    <li></li>
                </ul>
      </div>
    </div>
  </div><!-- end post-wrapper-top -->
  <div class="white-wrapper">
      <div class="container">
          <div class="general_row">
        <div class="custom_tab_2 row">
                            <div class="col-md-12">
                        <div class="tab-content">
                            <div class="tab-pane active">
                            <div class="doc">
                              
                                <form role="form" method="post" action="#" id="docreg" data-parsley-validate enctype="multipart/form-data">
                                <div style="color:red;">
                                * Please check your e-mail for the verification code   
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">User Id</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter User Id" required autofocus>
                                  </div>


                                  
                                  <div class="form-group">
                                

                                  <label>Verification Code</label>
                                  <input type="text" class="form-control" name="code_txt" id="full_name" placeholder="Six digit code (required)" required data-parsley-pattern="^[0-9\s]*$" title="only numbers" pattern="^[0-9\s]*$">

                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </form>
                                 </div>
                                </div>
                                 </div>
                                 </div>
                                 <br>
                                 <br>
                                 <br>
                                 
</div>
</div>
 </div>
 </div>
<?php require 'common/footer.php' ?>
<?php require 'common/bottom.php' ?>


 