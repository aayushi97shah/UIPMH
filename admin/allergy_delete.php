
<?php
session_start();
require 'common/header.php';
$id=$_POST['id'];
$qry="DELETE from allergy WHERE allergy_id=$id";
$rs=mysqli_query($conn,$qry);
//header("location:allergy_table.php");

require 'common/footer.php';
?>




