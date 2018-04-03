<?php session_start();
if(!isset($_SESSION['common_user']))
{
  header("location:index.php");
}
?>
<?php
 

$msg="";
$is=1;
$same="";


  require 'connection.php';
$u_id=$_POST['user_id'];
$pass=$_POST['password'];
$sel="SELECT * FROM laboratory WHERE user_id='".$u_id."' AND password='".$pass."'";
  $rs=mysqli_query($conn,$sel);
  $cnt=0;

  if(mysqli_num_rows($rs)>0)
  {
    $data=mysqli_fetch_assoc($rs);
    $cnt=1;
    echo "changepasswordnext_laboratory.php";
  }
  else
  {
    $cnt=0;
   echo "changepassword_laboratory.php";
  }
  





 ?>

