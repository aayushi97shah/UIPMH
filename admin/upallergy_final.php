
<?php
session_start();
require 'common/dbconnect.php';
$as='active';
$id=$_POST['id'];
 $an=$_POST['name'];
 $is=1;


       $qry="UPDATE allergy SET aname_txt='".$an."' , isactive='".$is."' WHERE allergy_id='".$id."'";
      	echo $qry;
       //exit();
		$rs=mysqli_query($conn,$qry);
   
?>