<?php session_start();

?>
<?php
 require 'connection.php';
$u_id=$_POST['user_id'];
$sel11="SELECT * FROM patient ";
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

if(isset($_POST['fnm_txt']) && $_POST['password']==$_POST['c_password'])
{
  require 'connection.php';
  require 'finalupload.php';
  $an=$_POST['fnm_txt'];
  $add=$_POST['adr'];
  $cty=$_POST['city_name'];
$cont=$_POST['contact_no'];
$age=$_POST['age'];
$bg=$_POST['blood_group'];
$u_id=$_POST['user_id'];
$pass=$_POST['password'];
$con_pass=$_POST['c_password'];
$gen=$_POST['gen1'];
 $sque=$_POST['sque'];
 $sanswer=$_POST['sanswer_txt'];
  $picname=$_FILES["fileToUpload"]["name"];

 $_SESSION['email_patient']=$u_id;
 $_SESSION['contact']=$cont;

  $sel="SELECT * FROM patient WHERE isactive=1";
  $rs=mysqli_query($conn,$sel);
  $cnt=1;

  if(mysqli_num_rows($rs)>0)
  {
    while($data=mysqli_fetch_assoc($rs))
    {
      if($data['pname_txt']==$an && $data['address']==$add)
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
    $qry="INSERT INTO patient(pname_txt,address,city_id,contact_no,gender,age,b_id,user_id,password,c_password,sq_id,sq_ans,isactive,profile_pic,status) VALUES('".$an."','".$add."','".$cty."','".$cont."','".$gen."','".$age."','".$bg."','".$u_id."','".$pass."','".$con_pass."','".$sque."','".$sanswer."','".$is."','".$picname."','".$ss."')";
  $rs1=mysqli_query($conn,$qry);

    if($rs1)
    {
      echo"mail_contact.php";
      //echo "$msg";

    }
    else
    {
      
        echo "#";
    }
  }

}
else
{
  echo "plz match password & confirm password";
}



 ?>