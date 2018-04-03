
<?php
session_start();
require 'common/dbconnect.php';
$as='active';
$id=$_POST['id'];
 $an=$_POST['name'];
 $is=1;


       $qry="UPDATE test SET tname_txt='".$an."' , isactive='".$is."' WHERE t_id='".$id."'";
      	
		$rs=mysqli_query($conn,$qry);
      
  
?>