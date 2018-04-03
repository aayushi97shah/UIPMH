<?php
$servername="localhost";
$username="root";
$password="";
$dbname="uipmh";

$conn=mysqli_connect($servername,$username,$password);
if($conn)
{
	
	$db = mysqli_select_db($conn,$dbname);
	if($db)
	{
//echo "database connected????";
	}
	else 
	{
//		echo "pagal 6o";
	}
}
else
{
	die("Connection failed: " . mysqli_connect_error());
}



?>