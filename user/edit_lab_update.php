<?php session_start();
if(!isset($_SESSION['common_user']))
{
  header("location:index.php");
}
?>
<?php
 


$up=$_SESSION['user_lab'];

      $msg="";
      $is=1;
      $same="";

      if(isset($_POST['lname']) && $_POST['password']==$_POST['c_password'])
      {
        require 'connection.php';
      
        $an=$_POST['lname'];
        
        $add=$_POST['adr'];
        $cty=$_POST['city_name'];
      $cont=$_POST['contact_no'];
      $u_id=$_POST['user_id'];
      $pass=$_POST['password'];
      $con_pass=$_POST['c_password'];
       $sque=$_POST['sque'];
       $sanswer=$_POST['sanswer_txt'];

     
       
date_default_timezone_set("Asia/Kolkata");
        $sel="SELECT * FROM laboratory WHERE user_id='".$up."' ";
        $rs=mysqli_query($conn,$sel);
        $cnt=1;
$data=mysqli_fetch_assoc($rs);
       
       
            $is=1;
            $ss="active";
          
            $qry="UPDATE laboratory SET lname_txt='".$an."', address='".$add."', city_id='".$cty."',contact_no='".$cont."',user_id='".$u_id."',password='".$pass."',c_password='".$con_pass."',sq_id='".$sque."',sq_ans='".$sanswer."',isactive='".$is."',dou='".date("Y-m-d h:i:sa")."' WHERE user_id='".$up."' ";
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

