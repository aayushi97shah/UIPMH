<?php session_start();

?>
<?php
 

$msg="";
$is=1;
$same="";


  require 'connection.php';
$u_id=$_POST['user_id'];


$sel="SELECT * FROM medical_store WHERE user_id='".$u_id."'";
  $rs=mysqli_query($conn,$sel);
  $cnt=0;

  if(mysqli_num_rows($rs)>0)
  {
    $data=mysqli_fetch_assoc($rs);
    $cnt=1;
    $_SESSION['common_user']=$u_id;
    $_SESSION['user_medical']=$u_id;
    echo "forgotpassword_medical_next.php";

  }
  else
  {
    $cnt=0;
   echo "#";
     
  }
  





 ?>

