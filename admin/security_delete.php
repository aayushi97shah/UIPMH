<?php
session_start();
require 'common/header.php';
$id=$_POST['id'];
$qry="UPDATE sequrity_question SET isactive=0 WHERE sq_id=$id";

$rs=mysqli_query($conn,$qry);

require 'common/footer.php';
?>