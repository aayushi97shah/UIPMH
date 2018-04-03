<?php session_start();

?>
<?php
 
require 'connection.php';

$u_id=$_POST['user_id'];
$sel11="SELECT * FROM medical_store ";
  $rs11=mysqli_query($conn,$sel11);
  if(mysqli_num_rows($rs11)>0)
  {
    while($data11=mysqli_fetch_assoc($rs11))
    {
      if($data11['user_id']==$u_id)
      {
       
        echo "mail already exist";
        exit();
      }
    }
  }
 

$msg="";
$is=1;
$same="";

if(isset($_POST['mname'])  && $_POST['password']==$_POST['c_password'])
{
  require 'connection.php';
  require 'finalupload.php';
  $an=$_POST['mname'];
  $add=$_POST['adr'];
  $cty=$_POST['city_name'];
$cont=$_POST['contact_no'];

$u_id=$_POST['user_id'];
$pass=$_POST['password'];
$con_pass=$_POST['c_password'];
$home_d=$_POST['hd'];
$sque=$_POST['sque'];
 $sanswer=$_POST['sanswer_txt'];
 $picname=$_FILES["fileToUpload"]["name"];
  $_SESSION['email_lab']=$u_id;
  $_SESSION['contact']=$cont;
  $sel="SELECT * FROM medical_store WHERE isactive=1";
  $rs=mysqli_query($conn,$sel);
  $cnt=1;

  if(mysqli_num_rows($rs)>0)
  {
    while($data=mysqli_fetch_assoc($rs))
    {
      if($data['mname_txt']==$an && $data['address']==$add)
      {
        $cnt=0;
        $same=$an." already exist";
        echo $same;
        break;
      }
    }
  }
  else
  {
    $cnt=1;
  }
  if($cnt==1)
  {
      $is=2;
      $ss="blocked";
    $qry="INSERT INTO medical_store(mname_txt,address,city_id,contact_no,home_delivery,user_id,password,c_password,sq_id,sq_ans,isactive,status,certificate) VALUES('".$an."','".$add."','".$cty."','".$cont."','".$home_d."','".$u_id."','".$pass."','".$con_pass."','".$sque."','".$sanswer."','".$is."','".$ss."','".$picname."')";
  $rs1=mysqli_query($conn,$qry);
    if($rs1)
    {
      echo "mail_contact_medical.php";
      //echo "$msg";

    }
    else
    {
      echo "#";
        //echo "$msg";
    }
  }

}


else
{
  echo "plz match";
}
 ?>