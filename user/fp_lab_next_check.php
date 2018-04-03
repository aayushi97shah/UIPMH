<?php session_start();
$up=$_SESSION['user_lab'];
?>
<?php
 

$msg="";
$is=1;
$same="";


  require 'connection.php';
$sque=$_POST['sque_txt'];
$sans=$_POST['sanswer_txt'];

$sel="SELECT * FROM sequrity_question WHERE question='".$sque."'";
  $rs=mysqli_query($conn,$sel);
   $data=mysqli_fetch_assoc($rs);
  $ab=$data['sq_id'];

  $sel1="SELECT * FROM laboratory WHERE user_id='".$up."' AND sq_id='".$ab."' AND sq_ans='".$sans."'";
  $rs1=mysqli_query($conn,$sel1);
  
  if(mysqli_num_rows($rs1)>0)
  {
    $data1=mysqli_fetch_assoc($rs1);
    $cnt=1;
    echo "changepasswordnext_laboratory.php";

  }
  else
  {
    $cnt=0;
   echo "#";
     
  }
  





 ?>

