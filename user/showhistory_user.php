 <html>
<head>
 <script src="js/jquery.js" type="text/javascript"></script>
   <script type="text/javascript">
  

 
 


  </script>
</head>


<?php session_start(); 
if(!isset($_SESSION['common_user']))
{
  header("location:index.php");
}
?>

<?php
require 'connection.php';

?>
<!DOCTYPE html>
<html lang="en">

<?php require "common/header.php"; ?>
 <?php require "common/top1.php"; ?>
 <head> <link href="css/showhistory_css.css" rel="stylesheet">


<script src="js/jquery.js" type="text/javascript"></script>
   <script type="text/javascript">
  $(document).ready(function() {
    
      $("#patient_reg_form").on('submit',function(e){
        e.preventDefault();
        $.ajax({    //create an ajax request to load_page.php
            type: "POST",
            url: "emnem.php",             
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
  <link href="css/animate.css" rel="stylesheet" type="text/css"> 
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<title></title>
</head>
<body>



 <div class="animationload">
<div class="loader">Loading...</div>
</div>
                
    
  <div class="post-wrapper-top clearfix"  >
    <div class="container">
      <div class="col-lg-12">
        <h2>Show History</h2>
                <ul class="breadcrumb pull-right" class="">
                    <li><a href="patient_dashboard.php" >Home</a></li>
                   <li></li>
                </ul>
      </div>
    </div>
  </div>

   <div class="white-wrapper"><?php require "sidemenu.php";?>
      <div class="container "> 
          <div class="general_row"> 
        <div class="custom_tab_2  row " style="margin-top:2px !important; margin-bottom:10px !important;">
<div class="col-lg-12">
                 
   <?php
$uname=$_SESSION['user_patient'];
$qry1 = "SELECT * FROM patient WHERE user_id='".$uname."'";
$rs1=mysqli_query($conn,$qry1);
$data1=mysqli_fetch_assoc($rs1);

$pp=$data1['profile_pic'];
$nm=$data1['pname_txt'];
$add=$data1['address'];
$con=$data1['contact_no'];
$age=$data1['age'];






?>

<div id="accordion-second" class="clearfix">
                                        <div class="accordion" id="accordion3">
                                          <div class="accordion-group">
                                            <div class="accordion-heading active">
                                              
                                            
                                          <div class="accordion-group">
                                            <div class="accordion-heading">
                                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseToggle1">
                                                <em class="fa fa-plus icon-fixed-width"></em> UserProfile 
                                              </a>
                                            </div>
                                            <div id="collapseToggle1" class="accordion-body collapse">
                                              <div class="accordion-inner"><center>
                                               <?php echo "<table>"; 
                                               echo "<tr><td> Name:".$nm."</td>";
                                               echo "<tr><td> Address:" .$add."</td></tr>";

                                                        echo "<tr><td> City:"; 
                                                        $b=$data1['city_id'];
                                                        //echo $b; 
                                                        $sel="SELECT * FROM city WHERE city_id='".$b."'";
                                                        $rb=mysqli_query($conn,$sel);
                                                        if($rb)
                                                        {
                                                          if(mysqli_num_rows($rb)>0)
                                                          {
                                                             while ($data=mysqli_fetch_assoc($rb)) 
                                                          {
                                            
                                                            echo $data['cname_txt']; 
                                                          }
                                                          }
                                                        }
                                                      echo "</td></tr>";
                                                echo "<tr><td> ContactNo:" .$con."</td></tr>";

                                                      echo "<td> Gender:"; 
                                                      if($data1['gender']=="1")
                                                         { 
                                                            echo  "Male";
                                                        } 
                                                      else if($data1['gender']=="2")
                                                        {
                                                            echo  "Female";
                                                        }
                                                        echo " </td></tr>";
                                                        echo "<tr><td>Age:".$age;
                                                        echo "</td></tr>";
                                                        
                                                        echo "<tr><td>BloodGroup: ";  
                                                        $b=$data1['b_id']; 
                                                      $sel="SELECT * FROM blood_group WHERE b_id=$b";
                                                    $rb=mysqli_query($conn,$sel);
                                                 if($rb)
                                                {
                                                    if(mysqli_num_rows($rb)>0)
                                                    {
                                               while ($data=mysqli_fetch_assoc($rb)) 
                                                {
                                            
                                                    echo $data['bname_txt']; 

                                                }
                                                }
                                                }
                                               echo "</td></tr></table>";
                                            ?></center>
                                               </div>
                                            </div>
                                          </div>
                                          
                                    </div> 
                                    <div class="accordion-group">
                                            <div class="accordion-heading">
                                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseToggle2">
                                                <em class="fa fa-plus icon-fixed-width"></em>Allergy
                                              </a>
                                            </div>
                                            <div id="collapseToggle2" class="accordion-body collapse">
                                              <div class="accordion-inner"><center>
                                              <?php $cnt=0; 
                                              $qry2 = "SELECT * FROM user_allergy WHERE user_id='".$uname."'";
                                              $rs2=mysqli_query($conn,$qry2);
                                              
                                              if(mysqli_num_rows($rs2)>0)
                                                    {
                                               while ($data=mysqli_fetch_assoc($rs2)) 
                                                {   $cnt++;
                                                    echo "<tr><td>".$cnt.". ";
                                                    echo $data['aname_txt']."<br>"; 
                                                    echo "</td></tr>";
                                                }
                                                }
                                                 
                                                      ?>

                                               </center>
                                              </div>
                                            </div>
                                          </div>   
                                             <div class="accordion-group">
                                            <div class="accordion-heading">
                                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseToggle3">
                                                <em class="fa fa-plus icon-fixed-width"></em>Vaccination
                                              </a>
                                            </div>
                                            <div id="collapseToggle3" class="accordion-body collapse">
                                              <div class="accordion-inner"><center>
                                              <?php $cnt=0; 
                                              $qry3 = "SELECT * FROM user_vaccination WHERE user_id='".$uname."'";
                                              $rs3=mysqli_query($conn,$qry3);
                                              
                                              if(mysqli_num_rows($rs3)>0)
                                                    {
                                               while ($data=mysqli_fetch_assoc($rs3)) 
                                                {   $cnt++;
                                                  echo "<tr><td>".$cnt.". ";
                                                    echo $data['vname_txt']."<br>"; 
                                                   echo "</td></tr>";
                                                  
                                                }
                                                }
                                                 
                                                      ?>

                                               </center>
                                              </div>
                                            </div>
                                          </div>   
                                            
                                                    
                                                   
                                                    
                                             
                                                
                                                 

                                              
<?php
$qry = "SELECT * FROM my_case WHERE user_id='".$uname."'";
 $cnt=0;
  $rs=mysqli_query($conn,$qry);
     if($rs)
{
  if(mysqli_num_rows($rs)>0)
 {
while ($data=mysqli_fetch_assoc($rs)) 
{
$cnt++;
$id=$data['Case_id'];

 $dis=$data['disname_txt'];
 $date_dis=$data['date_disease'];
 $date=date_create($date_dis);
 date_format($date,'d-m-y');
 ?>
<?php
if($cnt%2!=0){
?> <ul class="timeline animated fadeInLeft" style="-webkit-animation-duration:2s; -webkit-animation-delay:1s; ">
 
                        <li  >
                            <div class=timeline-image >
                               <a href="#"> <img class=img-circle img-responsive style= "height:150px; width:156px;" src="upload/<?php echo $pp; ?>"  ></a>
                            </div>
                            <div class=timeline-panel >
                                <div class=timeline-heading >
                                <h4></h4>
                                <h4></h4>
                                    <h4 ><?php echo "$dis"; ?></h4>
                                    
                                </div>
                                <div class="timeline-body delete" >
                                   <h6> <p class='text-muted'><?php  echo date_format($date,'d-m-y');?></p></h6>
                           <a href="mycase.php?id=<?php echo $id;?>" class="delete"  style="color:#21C2F8!important;">Read More..</a>
                                </div>
                               
                            </div>
                              

                        </li></ul><?php
                        
                        }
                     
                      else
                      {?><ul class="timeline animated fadeInRight" style="-webkit-animation-duration:2s; -webkit-animation-delay:1s; ">
                    
                      <li class=timeline-inverted>
                            <div class=timeline-image>
                               <a href="#"> <img class=img-circle img-responsive style= "height:150px; width:156px;" src="upload/<?php echo $pp; ?>"  ></a>
                            </div>
                            <div class=timeline-panel>
                                <div class=timeline-heading>
                                <h4></h4><h4></h4>
                                    
                                    <h4><?php echo "$dis";?></h4>
                                  
                                </div>
                                <div class=timeline-body>
                                   <h6> <p class=text-muted><?php echo date_format($date,'d-m-y');?></p></h6>
                                      <a href="mycase.php?id=<?php echo $id;?>" class="delete"  style="color:#21C2F8!important;">Read More..</a>
                                </div>
                            </div>
                        </li> </ul><?php
                      }
                      }
                      }}?>
                        
                        
                       

</div>
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
                        
  
 <?php require "common/bottom.php";?>
   
  <?php require "common/footer.php"; ?>                          
                            
 
   
   
    
  
