<?php session_start();

?>
  <?php
    
 

$uname=$_SESSION['common_user'];
$bb=$_SESSION['user_type'];

$msg="";
$space="";
$is=1;
$same="";


if(isset($_POST['user_id']))
{

  if($_FILES["fileToUpload"]["name"]=="") 
{
   require 'connection.php';
  
  $aa=$_POST['uname_txt'];
  
  $cc=$_POST['post_txt'];
  
  $sel="SELECT * FROM feedback ";
  $rs=mysqli_query($conn,$sel);

    $is=2;

    $ss="blocked";
   
    $qry="INSERT INTO feedback(user_id,uname_txt,usertype,post_txt,isactive,status) VALUES('".$uname."','".$aa."','".$bb."','".$cc."','".$is."','".$ss."');";
  $rs1=mysqli_query($conn,$qry);
$type="feedback";
   $is=1;
   $qry2="INSERT INTO notification(user_id,user_type,isactive) VALUES('".$uname."','".$type."','".$is."')";
        $rs2=mysqli_query($conn,$qry2);
    if($rs1)
    {
     
        
      
      $msg="inserted successfully";
      echo $msg;

    }
    else
    {
      $msg="not successfully";
      echo $msg;
      

    }

}
 else
 {

  require 'connection.php';
  require 'finalupload.php';
  
  $aa=$_POST['uname_txt'];
  
  $cc=$_POST['post_txt'];
  $picname=$_FILES["fileToUpload"]["name"];
 
  $sel="SELECT * FROM feedback ";
  $rs=mysqli_query($conn,$sel);

    $is=2;

    $ss="blocked";
   
    $qry="INSERT INTO feedback(user_id,uname_txt,usertype,post_txt,profile_pic,isactive,status) VALUES('".$uname."','".$aa."','".$bb."','".$cc."','".$picname."','".$is."','".$ss."');";
  $rs1=mysqli_query($conn,$qry);
    if($rs1)
    {
      $msg="inserted successfully";
      echo $msg;

    }
    else
    {
      $msg="not successfully";
      echo $msg;
      

    }

}

}



?>
