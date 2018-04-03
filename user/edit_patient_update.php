<?php session_start();
if(!isset($_SESSION['common_user']))
{
  header("location:index.php");
}
?>
<?php
 

$up=$_SESSION['user_patient'];

if($_FILES["fileToUpload"]["name"]=="") 
{
  
    
      $msg="";
      $is=1;
      $same="";

      if(isset($_POST['fnm_txt']) && $_POST['password']==$_POST['c_password'])
      {
        require 'connection.php';

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

    
        $sel="SELECT * FROM patient WHERE user_id='".$up."' ";
        $rs=mysqli_query($conn,$sel);
        $cnt=1;
$data=mysqli_fetch_assoc($rs);
       date_default_timezone_set("Asia/Kolkata");
       
        if($data['password']==$data['c_password'])
        {
            $is=1;
            $ss="active";
          
            $qry="UPDATE patient SET pname_txt='".$an."', address='".$add."', city_id='".$cty."',contact_no='".$cont."',gender='".$gen."',age='".$age."',b_id='".$bg."',user_id='".$u_id."',password='".$pass."',c_password='".$con_pass."',sq_id='".$sque."',sq_ans='".$sanswer."',isactive='".$is."',status='".$ss."',dou='".date("Y-m-d h:i:sa")."' WHERE user_id='".$up."' ";
        $rs1=mysqli_query($conn,$qry);
          if($rs1)
          {
            $msg="updated successfully";
            echo "$msg";

          }
          else
          {
            $msg="not successfully";
              echo "$msg";
          }
        }
      }
      else
      {
        echo "plz match";
      }


}
else
{
       

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

        
        $sel="SELECT * FROM patient WHERE user_id='".$up."' ";
        $rs=mysqli_query($conn,$sel);
        $cnt=1;
$data=mysqli_fetch_assoc($rs);
       
       
        if($data['password']==$data['c_password'])
        {
            $is=1;
            $ss="active";
          
            
  $qry="UPDATE patient SET pname_txt='".$an."', address='".$add."', city_id='".$cty."',contact_no='".$cont."',gender='".$gen."',age='".$age."',b_id='".$bg."',user_id='".$u_id."',password='".$pass."',c_password='".$con_pass."',sq_id='".$sque."',sq_ans='".$sanswer."',isactive='".$is."',profile_pic='".$picname."',status='".$ss."',dou='".date("Y-m-d h:i:sa")."' WHERE user_id='".$up."' ";
        $rs1=mysqli_query($conn,$qry);
          if($rs1)
          {
            $msg="updated successfully";
            echo "$msg";

          }
          else
          {
            $msg="not successfully";
              echo "$msg";
          }
        }
      }
      else
      {
        echo "plz match";
      }



}


 ?>

