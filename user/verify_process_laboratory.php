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
$qry1="UPDATE laboratory SET verification_code=".$ver.",isactive=".$is.",status='".$ss."',dou='".date("Y-m-d h:i:sa")."' where user_id='".$contact."'" ;  
//echo $qry1;
//exit();      
$rs1=mysqli_query($conn,$qry1);
 $is=1;
      $u_type="laboratory";
       $qry2="INSERT INTO notification(user_id,user_type,isactive) VALUES('".$contact."','".$u_type."','".$is."')";
       //echo $qry2;
      // exit();
  $rs2=mysqli_query($conn,$qry2);
    if($rs1)
    {
     
      echo "login_lab.php";
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