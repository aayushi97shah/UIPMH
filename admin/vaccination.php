<html>
<head>
<script src="js/jquery.js" type="text/javascript"></script>
   <script type="text/javascript">
  $(document).ready(function() {
    
      $("#vaccination_form").on('submit',function(e){
        e.preventDefault();
        $.ajax({    //create an ajax request to load_page.php
            type: "POST",
            url: "vaccination_insert.php",             
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
require 'common/top.php';  ?>
</head>

        <div id="page-wrapper" >
            <div id="page-inner" class="back1">
                <div class="row">
               
                    <div class="col-md-12">
                    <div id="display"></div>
                     <h2>Vaccination</h2>   
                        
                    

                                        <div class="form-group"><form action="#" method="post"   id="vaccination_form">
                                            <label>Enter Vaccination</label>
                                            <input class="form-control" name="vaccination_txt" placeholder="Please Enter Vaccination"  required autofocus pattern="[A-Za-z\s]{2,50}" title="only character"/><br>
                                            <input type="submit" name="submit_vaccination" class="btn btn-default" value="ADD">
                                            </form>
                                        </div></div>
                </div>
                 <!-- /. ROW  -->
                 <!-- <hr /> -->
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
<?php require 'common/bottom.php'; ?>