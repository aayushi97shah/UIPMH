<html>
<head>

<script src="js/jquery.js" type="text/javascript"></script>
   <script type="text/javascript">
  $(document).ready(function() {
    
      $("#city_form").on('submit',function(e){
        e.preventDefault();
        $.ajax({    //create an ajax request to load_page.php
            type: "POST",
            url: "city_insert.php",             
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




require 'common/top.php'; ?>
<title></title>
</head>
<body>

	<div id="page-wrapper" >
            <div id="page-inner" class="back1">
                <div class="row">
                
                    <div class="col-md-12">
                    
 <div id="display">
   


 </div> 
                    <h2>City</h2>
                      <div class="form-group">
                      <form action="#" method="post" id="city_form" >
                                            <label>Enter City</label>
                                            <input class="form-control" name="city_txt" placeholder="Please Enter City"  required autofocus pattern="[A-Za-z\s]{2,15}" title="only character"/><br>

                        
                        <input type="submit" name="submit_city"  class="btn btn-default" value="ADD"></input>
                        </form>
                        </div>
                    </div>
                </div>
                 <!-- /. ROW  -->
                
               
    </div>
             <!-- /. PAGE INNER  -->
          <?php require 'common/bottom.php'; ?>