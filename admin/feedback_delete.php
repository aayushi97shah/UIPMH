<?php
session_start();
require 'common/header.php';
$id=$_POST['id'];

$qry="DELETE from feedback WHERE f_id=$id";
$rs=mysqli_query($conn,$qry);

require 'common/footer.php';
?>