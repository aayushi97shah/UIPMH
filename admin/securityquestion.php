<html>
<head>
<script src="js/jquery.js" type="text/javascript"></script>
   <script type="text/javascript">
  $(document).ready(function() {
    
      $("#sq_form").on('submit',function(e){
        e.preventDefault();
        $.ajax({    //create an ajax request to load_page.php
            type: "POST",
            url: "securityquestion_insert.php",             
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

  <?php

    session_start();
if(!isset($_SESSION['userid']))
{
  header("location:index.php");
}

   require 'common/top.php';
    


 ?>
<title></title>
</head>
<body>
        <div id="page-wrapper" >
            <div id="page-inner" class="back1">
            <div class="row">
            <div class="col-md-12">
           
 <div id="display">
   


 </div> 
            <h2>Security question</h2>
               
                                          <div class="form-group">
                                          <form method="post" id="sq_form" >
                                            <label>Enter security question</label>
                                            <input class="form-control" name="securityquestion_txt" type="text" placeholder="Please Enter Security question" required autofocus data-parsley-pattern="^[a-zA-Z?\s]*$" title="only character" pattern="^[a-zA-Z?\s]*$" /><br>

                        
                        <input type="submit" name="submit_securityquestion" id="security_id" class="btn btn-default" value="ADD"></input>
                        </form>
                        </div>
                    </div>
                </div>
              
               </div>
    </div>
             <!-- /. PAGE INNER  -->
<?php require 'common/bottom.php'; ?>

