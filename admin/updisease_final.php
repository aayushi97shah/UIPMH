
<?php
session_start();
require 'common/dbconnect.php';
$as='active';
$id=$_POST['id'];
 $an=$_POST['name'];
 $is=1;


       $qry="UPDATE disease SET dname_txt='".$an."' , isactive='".$is."' WHERE disease_id='".$id."'";
      	
		$rs=mysqli_query($conn,$qry);
 
?>