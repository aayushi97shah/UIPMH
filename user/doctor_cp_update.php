<?php session_start();
if(!isset($_SESSION['common_user']))
{
  header("location:index.php");
}
?>
<?php
 
$up=$_SESSION['user_doctor'];
$msg="";
$is=1;
$same="";

if($_POST['n_password']==$_POST['c_password'])
{
  require 'connection.php';
$con_pass=$_POST['c_password'];
date_default_timezone_set("Asia/Kolkata");
    $qry="UPDATE doctor SET password='".$con_pass."', c_password='".$con_pass."', dou='".date("Y-m-d h:i:sa")."' WHERE user_id='".$up."'";
  $rs1=mysqli_query($conn,$qry);
    if($rs1)
    {
      $msg="logout.php";
echo "$msg";

    }
    else
    {
       $msg="changepasswordnext_doctor.php";
       echo "$msg";

    }
 } 
else
{
   $msg="changepasswordnext_doctor.php";
   echo "$msg";

}



 ?>