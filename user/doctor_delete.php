<?php session_start();
if(!isset($_SESSION['common_user']))
{
  header("location:index.php");
}
?>
<?php

require 'common/header.php';
$id=$_POST['id'];
$qry="DELETE from doctor WHERE doc_id=$id";
$rs=mysqli_query($conn,$qry);

require 'common/footer.php';
?>




