<?php
session_start();
require 'common/header.php';
$id=$_POST['id'];
$qry="DELETE from city WHERE city_id=$id";
$rs=mysqli_query($conn,$qry);

require 'common/footer.php';
?>