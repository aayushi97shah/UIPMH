<?php session_start();
if(!isset($_SESSION['common_user']))
{
  header("location:index.php");
}
?>
  <?php
    
 

$uname=$_SESSION['user_patient'];
 
$msg="";
$space="";
$is=1;
$same="";


if(isset($_POST['vaccination_name']))
{

  
  require 'connection.php';
  $an=$_POST['vaccination_name'];
 
 $dv=$_POST['date_vaccination'];
  $sel="SELECT * FROM user_vaccination ";
  $rs=mysqli_query($conn,$sel);

  $sel1="SELECT * FROM vaccination where vacci_id='".$an."'";
  $rs1=mysqli_query($conn,$sel1);
  $data1=mysqli_fetch_assoc($rs1);
  $ass=$data1['vname_txt'];
   echo $ass;
    $is=1;
   
    $qry="INSERT INTO user_vaccination(user_id,dateofvacci,vname_txt) VALUES('".$uname."','".$dv."','".$ass."');";
  $rs1=mysqli_query($conn,$qry);
    if($rs1)
    {
      $msg=" inserted successfully";
      echo $msg;

    }
    else
    {
      $msg=" not successfully";
      echo $msg;
      

    }
  }



?>
