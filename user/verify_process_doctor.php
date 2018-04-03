<?php session_start();

?>
<?php
 

$msg="";
$is=1;
$same="";
date_default_timezone_set("Asia/Kolkata");
if(isset($_POST['code_txt']) )
{
  require 'connection.php';

 $ver=$_POST['code_txt'];
 $contact=$_POST['email'];
 $ss="blocked";
 $is=2;
 
  $sel="SELECT * FROM verification";
  $rs=mysqli_query($conn,$sel);

  if(mysqli_num_rows($rs)>0)
  {
    while($data=mysqli_fetch_assoc($rs))
    {
      if($data['code']==$ver)
      {
$qry1="UPDATE doctor SET verification_code='".$ver."',isactive='".$is."',status='".$ss."',dou='".date("Y-m-d h:i:sa")."' WHERE user_id='".$contact."' ";        
$rs1=mysqli_query($conn,$qry1);
    if($rs1)
    {
      $is=1;
      $u_type="doctor";
       $qry2="INSERT INTO notification(user_id,user_type,isactive) VALUES('".$contact."','".$u_type."','".$is."')";
  $rs2=mysqli_query($conn,$qry2);
      echo "login_doctor.php";
      //echo "$msg";

    }
    else
    {
      
        echo "#";
    }
      }
    }
  }
  else
  {
    echo "code not found";
  }
  
}
else
{
  echo "plz match";
}



 ?>