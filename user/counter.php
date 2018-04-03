<style type="text/css">
  
  .canvasjs-chart-credit
  {
      display: none;
  }
  
</style>
<?php
session_start();

?>

<?php
  require 'connection.php';
  ?>

<!DOCTYPE html>
<html lang="en">

<?php require "common/header.php"; ?>
 <?php require "common/top.php"; ?>
 <?php  $cnt1=0;
                                                require 'connection.php';
                                  $sel="SELECT * FROM patient WHERE gender=1";
                                                    $rs=mysqli_query($conn,$sel);
                                                 if($rs)
                                                {
                                                    if(mysqli_num_rows($rs)>0)
                                                    {
                                            
                                                while ($data=mysqli_fetch_assoc($rs)) 
                                                {
                                           
                                                    $cnt1++;

                                           
                                                }
                                             }
                                             }

                                             
                                            ?>
<!-- Doctor Male -->
                                                 <?php  $cnt2=0;
                                                require 'connection.php';
                                  $sel="SELECT * FROM doctor WHERE gender=1";
                                                    $rs=mysqli_query($conn,$sel);
                                                 if($rs)
                                                {
                                                    if(mysqli_num_rows($rs)>0)
                                                    {
                                            
                                                while ($data=mysqli_fetch_assoc($rs)) 
                                                {
                                           
                                                    $cnt2++;

                                           
                                                }
                                             }
                                             }

                                             
                                            ?>


<!-- 
patient female -->

                                            <?php  $cnt3=0;
                                                require 'connection.php';
                                  $sel="SELECT * FROM patient WHERE gender=2";
                                                    $rs=mysqli_query($conn,$sel);
                                                 if($rs)
                                                {
                                                    if(mysqli_num_rows($rs)>0)
                                                    {
                                            
                                                while ($data=mysqli_fetch_assoc($rs)) 
                                                {
                                           
                                                    $cnt3++;

                                           
                                                }
                                             }
                                             }

                                             
                                            ?>



                                        <?php  $cnt4=0;
                                                require 'connection.php';
                                  $sel="SELECT * FROM doctor WHERE gender=2";
                                                    $rs=mysqli_query($conn,$sel);
                                                 if($rs)
                                                {
                                                    if(mysqli_num_rows($rs)>0)
                                                    {
                                            
                                                while ($data=mysqli_fetch_assoc($rs)) 
                                                {
                                           
                                                    $cnt4++;

                                           
                                                }
                                             }
                                             }

                                             
                                            ?>
                                             <?php  $cnt5=0;
                                                require 'connection.php';
                                  $sel="SELECT * FROM laboratory";
                                                    $rs=mysqli_query($conn,$sel);
                                                 if($rs)
                                                {
                                                    if(mysqli_num_rows($rs)>0)
                                                    {
                                            
                                                while ($data=mysqli_fetch_assoc($rs)) 
                                                {
                                           
                                                    $cnt5++;

                                           
                                                }
                                             }
                                             }

                                             
                                            ?>

                                            <?php  $cnt6=0;
                                                require 'connection.php';
                                  $sel="SELECT * FROM medical_store";
                                                    $rs=mysqli_query($conn,$sel);
                                                 if($rs)
                                                {
                                                    if(mysqli_num_rows($rs)>0)
                                                    {
                                            
                                                while ($data=mysqli_fetch_assoc($rs)) 
                                                {
                                           
                                                    $cnt6++;

                                           
                                                }
                                             }
                                             }

                                             
                                            ?>

<script src="js/jquery.js" type="text/javascript"></script>
   <script type="text/javascript">
  $(document).ready(function() {
    
      $("#patient_reg_form").on('submit',function(e){
        e.preventDefault();
        $.ajax({    //create an ajax request to load_page.php
            type: "POST",
            url: "lab_report_update.php",             
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


      $("#allergy").change(function() {
        //alert('hi');
        var del_id = $("#allergy").val();
        //alert(del_id);
        var qrystrng = 'id='+del_id;
        // alert(qrystrng);
        
        $.ajax({    //create an ajax request to load_page.php
          type: "POST",
          url: "counter_next.php",             
          data:{
            id:del_id
          },               
          success: function(response){
           // alert(response);
            $("#cnt").html(response);
                   //window.location.href="allergy_table.php";
              //return true;
          }   
        });
            


    });

 $("#vaccination").change(function() {
        //alert('hi');
        var del_id = $("#vaccination").val();
        //alert(del_id);
        var qrystrng = 'id='+del_id;
        // alert(qrystrng);
        
        $.ajax({    //create an ajax request to load_page.php
          type: "POST",
          url: "counter_next1.php",             
          data:{
            id:del_id
          },               
          success: function(response){
           // alert(response);
            $("#cnt1").html(response);
                   //window.location.href="allergy_table.php";
              //return true;
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
                
  




   <?php



  


 
  $qry2="SELECT * FROM allergy ";
   $rs2 = mysqli_query($conn,$qry2);

  
if(mysqli_num_rows($rs2)>0)
 {
                                            
$cnt=mysqli_num_rows($rs2);

}


?>  


   <?php

  $qry2="SELECT * FROM vaccination ";
   $rs2 = mysqli_query($conn,$qry2);

  
if(mysqli_num_rows($rs2)>0)
 {
                                            
$cnt1=mysqli_num_rows($rs2);

}


?>  

<form role="form" method="post" action="#" data-parsley-validate id="patient_reg_form">
<div class="post-wrapper-top clearfix">
		<div class="container">
			<div class="col-lg-12">
				<h2>Report</h2>
                <ul class="breadcrumb pull-right">
                    <li><a href="index.php">Home</a></li>
                   <li></li>
                </ul>
			</div>
		</div>
	</div>
  <div class="white-wrapper" >
      <div class="container">

  <iframe src="cc.php" width="100%" height="65%"></iframe>
  <iframe src="cc4.php" width="100%" height="65%"></iframe>
<div class="col-md-6" style="margin-top:40px; ">
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
                                                
                                                <select class="form-control" id="allergy" name="allergy">
                                                <option selected value="no selcect">Select Allergy name
                                            <?php   
                                                while ($data=mysqli_fetch_assoc($rs)) 
                                                {
                                            ?>
                                                    <option value="<?php echo $data['allergy_id']; ?>"><?php echo $data['aname_txt']; ?>

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

<div class="tab-content">
                            <div class="tab-pane active">
        <div class="stat f-container">
          <div class="f-element col-lg-12 col-md-12 col-sm-6 col-xs-12">
            <div class="milestone-counter">
                          <i class="fa fa-user fa-3x"></i>
                            <span class="stat-count highlight" id="cnt"><?php echo "$cnt";?></span>
                            <div class="milestone-details">Allergy</div>
            </div>
          </div>
         
         </div></div>
         



        </div><!-- stat -->
                            </div><!-- end active -->
                        


                            <div class="col-md-6" style="margin-top:40px; ">
  <?php
                                                require 'connection.php';
                                                  $sel="SELECT * FROM vaccination";
                                                    $rs=mysqli_query($conn,$sel);
                                                 if($rs)
                                                {
                                                    if(mysqli_num_rows($rs)>0)
                                                    {
                                            ?>
                                                <div class="form-group">
                                                
                                                <select class="form-control" id="vaccination" name="vaccination">
                                                <option selected value="no selcect">Select Vaccination name
                                            <?php   
                                                while ($data=mysqli_fetch_assoc($rs)) 
                                                {
                                            ?>
                                                    <option value="<?php echo $data['vacci_id']; ?>"><?php echo $data['vname_txt']; $allergy=$data['vname_txt'];?>

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



<div class="tab-content"> 
                            <div class="tab-pane active">
        <div class="stat f-container">
          <div class="f-element col-lg-12 col-md-12 col-sm-6 col-xs-12">
            <div class="milestone-counter">
                          <i class="fa fa-user fa-3x"></i>
                            <span class="stat-count highlight" id="cnt1"><?php echo "$cnt1";?></span>
                            <div class="milestone-details">Vaccination</div>
            </div>
          </div>
         
         </div></div>
         
                        </option></select></div></div></div></div>

</form><br><br>
               


  <?php require "common/bottom.php"; ?>    
  <?php require "common/footer.php"; ?>   

  <script type="text/javascript">


  </script>                       
