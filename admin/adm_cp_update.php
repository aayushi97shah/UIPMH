<?php session_start();
if(!isset($_SESSION['common_user']))
{
  header("location:index.php");
}
?>
<?php
 
$up=$_SESSION['user_adm'];
$msg="";
$is=1;
$same="";

if($_POST['n_password']==$_POST['c_password'])
{
  require 'connection.php';
$con_pass=$_POST['c_password'];
    $qry="UPDATE adm SET pass_txt='".$con_pass."' WHERE uid_txt='".$up."'";
  $rs1=mysqli_query($conn,$qry);
    if($rs1)
    {
      $msg="logout.php";
echo "$msg";

    }
    else
    {
       $msg="changepasswordnext_adm.php";
       echo "$msg";

    }
 } 
else
{
   $msg="changepasswordnext_adm.php";
   echo "$msg";

}



 ?>