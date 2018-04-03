
<?php
session_start();
require 'connection.php';

$uname1=$_GET['id'];
$uname=$_SESSION['user_patient'];
$qry1 = "SELECT * FROM patient WHERE user_id='".$uname."'";
$rs1=mysqli_query($conn,$qry1);
$data1=mysqli_fetch_assoc($rs1);
$nm=$data1['pname_txt'];
$pp=$data1['profile_pic'];
$nm=$data1['pname_txt'];
$add=$data1['address'];
$con=$data1['contact_no'];
$age=$data1['age'];


?>
<body >
<link href="css/animate.css" rel="stylesheet" type="text/css"> 
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<?php require "common/top1.php"; ?>
<?php require "common/header.php"; ?>
 <div class="post-wrapper-top clearfix"  >
    <div class="container">
      <div class="col-lg-12">
        <h2>Case:<?php echo "$uname1"."<br>"; ?></h2>
                <ul class="breadcrumb pull-right" class="">
                    <li><a href="showhistory_doctor.php" >Back</a></li>
                   <li></li>
                </ul>
      </div>
    </div>
  </div>
  <div class="white-wrapper" style="background-image: url(images/back1.png);" >
  <div class="container">
        	<div class="general_row">
        	<center>

                                               <?php echo "<table>";  
                                               echo "<tr><td style='font-size:17px !important;'> Name:</td><td> ".$nm."</td>";
                                               echo "<tr><td style='font-size:17px !important;'> Address:</td><td> " .$add."</td></tr>";

                                                        echo "<tr><td style='font-size:17px !important;'> City: </td><td>"; 
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
                                                echo "<tr><td style='font-size:17px !important;'> ContactNo:</td><td> " .$con."</td></tr>";

                                                      echo "<td style='font-size:17px !important;'> Gender:</td><td> "; 
                                                      if($data1['gender']=="1")
                                                         { 
                                                            echo  "Male";
                                                        } 
                                                      else if($data1['gender']=="2")
                                                        {
                                                            echo  "Female";
                                                        }
                                                        echo " </td></tr>";
                                                        echo "<tr><td style='font-size:17px !important;'> Age: </td><td>".$age;
                                                        echo "</td></tr>";
                                                        
                                                        echo "<tr><td style='font-size:17px !important;'>BloodGroup: </td><td>";  
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
                                            

                                               echo "</td></tr>";

                                            ?>
                                            	
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
$case_id=$data['Case_id'];
if($case_id==$uname1)
{


 $dis=$data['disname_txt'];

 $date_dis=$data['date_disease'];
 $date=date_create($date_dis);
 date_format($date,'d-m-y');
 $doctor_id=$data['doctor_id'];
 $medi=$data['medname_txt'];
 $prescription=$data['prescription'];
 $report=$data['rname_txt'];
 $desc=$data['description'];

     echo "<br></table><br><table><tr><td style='font-size:20px !important; font-weight:bolder;'><b>Doctor Id: </td><td style='font-size:20px !important; font-weight:bolder;'>"; 
    echo "$doctor_id";
      echo "</td></tr>";

     echo "<tr><td style='font-size:20px !important; font-weight:bolder;'>Date of disese:</td><td style='font-size:20px !important; font-weight:bolder;'> "; 
     echo date_format($date,'d-m-y');
      echo "</td></tr>";

        echo "<tr><td style='font-size:20px !important; font-weight:bolder;'>Disease Name: </td><td style='font-size:20px !important; font-weight:bolder;'>"; 
    echo "$dis";
      echo "</td></tr>";

        echo "<tr><td style='font-size:20px !important; font-weight:bolder;'>Medicine Name: </td><td style='font-size:20px !important; font-weight:bolder;'>"; 
    echo "$medi";
      echo "</td></tr>";


     	echo "<tr><td style='font-size:20px !important;  font-weight:bolder;'>prescription: </td><td style='font-size:20px !important; text-decoration:underline; font-weight:bolder;''>";
     	?>
     		 <a href="upload/<?php echo $data['prescription'];?>" target="_blanck">
        <!--  --><?php echo $data['prescription'];?>
        </a> <?php
      echo "</td></tr>";?>
          <?php
      
        echo "<tr><td style='font-size:20px !important; font-weight:bolder;'>Discription:</td><td style='font-size:20px !important; font-weight:bolder;' > "; 
    echo "$desc";
      echo "</td></tr></b>";
      
     
     


}
}
 
}
}
 ?>

<?php

$qry = "SELECT * FROM report WHERE case_id='".$uname1."'";
 $cnt=0;
  $rs=mysqli_query($conn,$qry);
     if($rs)
{
  if(mysqli_num_rows($rs)>0)
 {
 	echo " </table><br>";
 	echo "<table style='border:2px solid #21c2f8;' class=table table-striped>";
 	echo "<tr ><th style='font-size:25px !important; line-height:0.45827 !important; border: 2px solid #219ff8; background-color:#21c2f8; color:white !important; font-weight:bolder;' >Report No:</th>";
echo "<th style='font-size:25px !important; line-height:0.45827 !important; border: 2px solid #219ff8; background-color:#f8f8f8; background-color:#21c2f8; color:white !important; font-weight:bolder;'>Report Name:</th>";
echo "<th style='font-size:25px !important; line-height:0.45827 !important; border: 2px solid #219ff8; background-color:#f8f8f8; background-color:#21c2f8; color:white !important; font-weight:bolder;'>Report Result:</th></tr>";
while ($data1=mysqli_fetch_assoc($rs)) 
{

$cnt++;
$case_id=$data1['case_id'];

if($case_id==$uname1)
{
	$r_id=$data1['report_id'];
	$rname=$data1['rname_txt'];
	$r_result=$data1['report_result'];
	echo "<tr><td style='border: 2px solid #21c2f8; font-size:20px !important; padding:9px !important; padding-left:23px !important;     padding-top: 20px !important; color:black !important; background-image: url(images/bg.png);'>"; 
    echo "$cnt";
      echo "</td>";
	 echo "<td style='border: 2px solid #21c2f8; font-size:20px !important; padding:9px !important; padding-left:23px !important;     padding-top: 20px !important; color:black !important; background-image: url(images/bg.png);'>"; 
    echo "$rname";
      echo "</td>";

       echo "<td style='border: 2px solid #21c2f8; font-size:20px !important; padding:9px !important;  padding-left:23px !important; padding-top: 20px !important; background-image: url(images/bg.png); text-decoration:underline;'>"; ?>
       <a href="upload/<?php echo $data1['report_result'];?>" target="_blanck">
        <!--  --><?php echo $data1['report_result'];?>
        </a>
        </td>
  
    <?php 
      echo "</td></tr>";
 
  
}
}
}
}echo "</table>"; 

?>

                                     </center>
                                              
                                    
     </div>
  </div>
 <br>
 <br>
 <br> <br><br>
  </div><?php require "common/bottom.php"; ?>
  <?php require "common/footer.php"; ?>
