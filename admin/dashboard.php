<?php 
session_start();
require 'common/header.php'; 
$qry = "SELECT * FROM adm";

$rs = mysqli_query($conn,$qry);
$total_user = mysqli_num_rows($rs);


?>

<?php require 'common/footer.php'; ?>
