<?php session_start();
if(!isset($_SESSION['common_user']))
{
  header("location:index.php");
}
?>
<?php

 
$id=$_SESSION['user_doctor'];
$msg="";
$is=1;
$same="";

if(isset($_POST['report_name']))
{
  require 'connection.php';
  
  $rn=$_POST['report_name'];
 echo "$rn";
  $case_id=$_POST['case_id'];
  
  
 echo "$case_id";

 echo "$is";
  
  $sel="SELECT * FROM report WHERE isactive=1";
  $rs=mysqli_query($conn,$sel);
  $cnt=1;

  
      $is=1;
      $ss="active";
    $qry="INSERT INTO report(case_id,rname_txt,isactive) VALUES('".$case_id."','".$rn."','".$is."')";
  $rs1=mysqli_query($conn,$qry);
    if($rs1)
    {
      $msg="inserted successfully";
      echo "upload_report_doctor.php";

    }
    else
    {
      $msg="not successfully";
        echo "$msg";



    }


}
else
{
  echo "plz match";
}



 ?>