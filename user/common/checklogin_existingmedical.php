<?php
	require '../connection.php';
	session_start();
	var_dump($_POST);
	if(!isset($_POST['submit']))
	{
		header("location:../existingmedical.php");
	}
	$uname = $_POST['uid_txt'];
	

	$qry = "SELECT * FROM patient WHERE user_id='".$uname."' ";
	echo "$qry";
	$rs = mysqli_query($conn,$qry);
	if (mysqli_num_rows($rs) > 0)
	{
		$row = mysqli_fetch_assoc($rs);
		$_SESSION['user_patient']=$row['user_id'];
		
		//Coockies
		if(isset($_POST['remember']))
		{
			setcookie("user", $uname, time() + (86400 * 1), "/"); // 86400 = 1 day
			echo "set1";
			
		}
		header("location:../medical_id.php");
	}
	else
	{
		header("location:../existingmedical.php");
		setcookie($_COOKIE['user'],null,-1,"/");
	}

?>