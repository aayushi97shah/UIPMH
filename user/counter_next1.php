
<?php
session_start();

require 'connection.php';
$id=$_POST['id'];
$qry="SELECT * from vaccination WHERE vacci_id=$id";

$rs=mysqli_query($conn,$qry);
$data=mysqli_fetch_assoc($rs);

$cn=$data['vname_txt'];
$qry1="SELECT * from user_vaccination WHERE vname_txt='".$cn."'";

$rs1=mysqli_query($conn,$qry1);

$allcount=mysqli_num_rows($rs1);
echo $allcount;
?>




