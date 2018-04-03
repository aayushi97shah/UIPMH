<?php
	require 'dbconnect.php';
	session_start();
	var_dump($_POST);
	if(!isset($_POST['submit']))
	{
		header("location:../index.php");
	}
	$uname = $_POST['uid_txt'];
	$pass = $_POST['pass_txt'];

	$qry = "SELECT * FROM adm WHERE uid_txt='".$uname."' AND pass_txt='".$pass."'";
	echo "$qry";
	$rs = mysqli_query($conn,$qry);
	if (mysqli_num_rows($rs) > 0)
	{
		$row = mysqli_fetch_assoc($rs);
		$_SESSION['userid']=$row['uid_txt'];
		
		//Coockies
		if(isset($_POST['remember']))
		{
			setcookie("user", $uname, time() + (86400 * 1), "/"); // 86400 = 1 day
			echo "set1";
			setcookie("password", $pass, time() + (86400 * 1), "/"); // 86400 = 1 day
		}
		header("location:../index1.php");
	}
	else
	{
		header("location:../index.php?er_ms=you have enter wrong user-id or password");
		setcookie($_COOKIE['user'],null,-1,"/");
		setcookie("password",null,-1,"/");
	}

?>