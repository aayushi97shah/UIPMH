
<?php
session_start();
require 'common/dbconnect.php';
$as='active';
$id=$_POST['id'];
 $an=$_POST['name'];
 $is=1;


       $qry="UPDATE vaccination SET vname_txt='".$an."' , isactive='".$is."' WHERE vacci_id='".$id."'";
      	
		$rs=mysqli_query($conn,$qry);
      
   
?>