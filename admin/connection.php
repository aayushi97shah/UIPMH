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

	}
	else 
	{

	}
}
else
{
	die("Connection failed: " . mysqli_connect_error());
}



?>