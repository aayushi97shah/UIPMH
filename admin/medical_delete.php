<?php
session_start();
require 'common/header.php';
$id=$_POST['id'];

$qry="DELETE from medical_store WHERE medi_id=$id";
$rs=mysqli_query($conn,$qry);

require 'common/footer.php';
?>