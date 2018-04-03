<?php session_start();
if(!isset($_SESSION['common_user']))
{
  header("location:index.php");
}
?>
<?php


 
$id=$_SESSION['user_patient'];
$msg="";
$is=1;
$same="";


if($_FILES["fileToUpload"]["name"]!="")
{
if(isset($_POST['disname_txt']))
{
  require 'connection.php';
  require 'finalupload.php';
  $dd=$_POST['date_disease'];
  $dn=$_POST['disname_txt'];
  $mn=$_POST['medname_txt'];
  $dis=$_POST['description'];
  $rm=$_POST['rname_txt'];
  $picname=$_FILES["fileToUpload"]["name"];
  

  $sel="SELECT * FROM my_case WHERE isactive=1";
  $rs=mysqli_query($conn,$sel);
  $cnt=1;

  
      $is=1;
      $ss="active";
    $qry="INSERT INTO my_case(user_id,date_disease,disname_txt,medname_txt,description,isactive,prescription,rname_txt) VALUES('".$id."','".$dd."','".$dn."','".$mn."','".$dis."','".$is."','".$picname."','".$rm."')";
  $rs1=mysqli_query($conn,$qry);
    if($rs1)
    {
      $msg="inserted successfully";
      echo "upload_report.php";

    }
    else
    {
      $msg="not successfully";
      echo $msg;
        echo "mycase_user.php";


    }
  

}
else
{
  echo "plz match";
}

}
else
{
  if(isset($_POST['disname_txt']))
{
  require 'connection.php';
  //require 'finalupload.php';
  $dd=$_POST['date_disease'];
  $dn=$_POST['disname_txt'];
  $mn=$_POST['medname_txt'];
  $dis=$_POST['description'];
  $rm=$_POST['rname_txt'];
  //$picname=$_FILES["fileToUpload"]["name"];
  

  $sel="SELECT * FROM my_case WHERE isactive=1";
  $rs=mysqli_query($conn,$sel);
  $cnt=1;

  
      $is=1;
      $ss="active";
    $qry="INSERT INTO my_case(user_id,date_disease,disname_txt,medname_txt,description,isactive,rname_txt) VALUES('".$id."','".$dd."','".$dn."','".$mn."','".$dis."','".$is."','".$rm."')";
  $rs1=mysqli_query($conn,$qry);
    if($rs1)
    {
      $msg="inserted successfully";
      echo "upload_report.php";

    }
    else
    {
      $msg="not successfully";
      echo $msg;
        echo "mycase_user.php";


    }
  

}
else
{
  echo "plz match";
}
}

 ?>