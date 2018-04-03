
<?php
session_start();
require 'common/dbconnect.php';
$as='active';
$id=$_POST['id'];
 $an=$_POST['name'];
 $is=1;


       $qry="UPDATE city SET cname_txt='".$an."' , isactive='".$is."' WHERE City_ID='".$id."'";
      	echo $qry;
       //exit();
		$rs=mysqli_query($conn,$qry);
  
?>