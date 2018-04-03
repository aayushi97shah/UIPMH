<?php session_start();
if(!isset($_SESSION['common_user']))
{
  header("location:index.php");
}
?>
<?php
 
$up=$_SESSION['user_medical'];

    
      $msg="";
      $is=1;
      $same="";

      if(isset($_POST['mname']) && $_POST['password']==$_POST['c_password'])
      {
        require 'connection.php';
     
        $an=$_POST['mname'];
        
        $add=$_POST['adr'];
        $cty=$_POST['city_name'];
        $hd=$_POST['hd'];
      $cont=$_POST['contact_no'];
      $u_id=$_POST['user_id'];
      $pass=$_POST['password'];
      $con_pass=$_POST['c_password'];
       $sque=$_POST['sque'];
       $sanswer=$_POST['sanswer_txt'];

        $sel="SELECT * FROM medical_store WHERE user_id='".$up."' ";
        $rs=mysqli_query($conn,$sel);
        $cnt=1;
$data=mysqli_fetch_assoc($rs);
       
       date_default_timezone_set("Asia/Kolkata");
            $is=1;
            $ss="active";
          
            $qry="UPDATE medical_store SET mname_txt='".$an."', address='".$add."', city_id='".$cty."',contact_no='".$cont."',user_id='".$u_id."',home_delivery='".$hd."',password='".$pass."',c_password='".$con_pass."',sq_id='".$sque."',sq_ans='".$sanswer."',isactive='".$is."',dou='".date("Y-m-d h:i:sa")."' WHERE user_id='".$up."' ";
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
      else
      {
        echo "plz match";
      }



 ?>

