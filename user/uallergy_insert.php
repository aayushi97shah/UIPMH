<?php session_start();
if(!isset($_SESSION['common_user']))
{
  header("location:index.php");
}
?>
  <?php
    
 

$uname=$_SESSION['user_patient'];
//require 'common/top.php'; 
$msg="";
$space="";
$is=1;
$same="";


if(isset($_POST['allergy_name']))
{

  
  require 'connection.php';
  $an=$_POST['allergy_name'];
 
 
  $sel="SELECT * FROM user_allergy ";
  $rs=mysqli_query($conn,$sel);
//$data=mysqli_fetch_assoc($rs);
  $sel1="SELECT * FROM allergy where allergy_id='".$an."'";
  $rs1=mysqli_query($conn,$sel1);
  $data1=mysqli_fetch_assoc($rs1);
  $ass=$data1['aname_txt'];
   echo $ass;
    $is=1;
    $cnt=1;


 if(mysqli_num_rows($rs)>0)
  {
    while($data=mysqli_fetch_assoc($rs))
    {
      if($data['user_id']==$uname AND $data['aname_txt']==$ass)
      {
        $cnt=0;
        $same=" already exist";
        echo $same;
        exit();
      }
    }
  }
  else
  {
    $cnt=1;
  }
  

  if($cnt==1 AND $ass!='')
  {
//    $is=1;
  //  $ss='active';
    $qry="INSERT INTO user_allergy(user_id,aname_txt) VALUES('".$uname."','".$ass."');";
  $rs1=mysqli_query($conn,$qry);
    if($rs1)
    {
      $msg=" inserted successfully";
      echo $msg;
      exit();
    }
    else
    {
      $msg="not successfully";
      echo $msg;
      

    }
  }
  else
  {
    echo "plz select allergy";
  }

  }



?>
