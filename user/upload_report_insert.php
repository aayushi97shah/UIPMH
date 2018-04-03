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

if(isset($_POST['report_name']))
{
  require 'connection.php';
  require 'finalupload.php';
  $rn=$_POST['report_name'];
 
  $case_id=$_POST['case_id'];
  

  $picname=$_FILES["fileToUpload"]["name"];
 
  $sel="SELECT * FROM report WHERE isactive=1";
  $rs=mysqli_query($conn,$sel);
  $cnt=1;

  
      $is=1;
      $ss="active";
    $qry="INSERT INTO report(case_id,rname_txt,report_result,isactive) VALUES('".$case_id."','".$rn."','".$picname."','".$is."')";
  $rs1=mysqli_query($conn,$qry);
    if($rs1)
    {
      $msg="inserted successfully";
      echo "upload_report.php";

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