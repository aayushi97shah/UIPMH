
<?php
session_start();
require 'common/dbconnect.php';
$as='active';
$id=$_POST['id'];
 $an=$_POST['name'];
 $is=1;


       $qry="UPDATE sequrity_question SET question='".$an."' , isactive='".$is."' WHERE sq_id='".$id."'";
      	
		$rs=mysqli_query($conn,$qry);
      
   
?>