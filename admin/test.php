
<?php 
 session_start();
if(!isset($_SESSION['userid']))
{
  header("location:index.php");
}





 require 'common/top.php'; ?>


<html>
<head>
<script src="js/jquery.js" type="text/javascript"></script>
   <script type="text/javascript">
  $(document).ready(function() {
    
      $("#test_form").on('submit',function(e){
        e.preventDefault();
        $.ajax({    //create an ajax request to load_page.php
            type: "POST",
            url: "test_insert.php",             
            data:new FormData(this), // "coun_id="+id, {}
            cache       : false,
            contentType : false,
            processData : false, //expect html to be returned                
            success: function(response){
          alert(response);
          //$('#display').html(response);         
            }
            

        });
      });
});
  </script>



</head>
        <div id="page-wrapper" >
            <div id="page-inner" class="back1">
                <div class="row">
                
                    <div class="col-md-12">
                   <div id="display"></div>
                     <h2>Test</h2>   
                        
                    

                                        <div class="form-group"><form action="#" method="post" data-parsley-validate id="test_form" >
                                            <label>Enter Report name</label>
                                            <input class="form-control" name="test_txt" placeholder="Please Enter Report name" required autofocus pattern="[A-Za-z\s]{2,15}" title="only character"/><br>
                                            <input type="submit" name="submit_test" class="btn btn-default" value="ADD"></button>
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