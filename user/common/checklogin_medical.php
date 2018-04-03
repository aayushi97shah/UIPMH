<?php
	require '../connection.php';
	session_start();
	var_dump($_POST);
	if(!isset($_POST['submit']))
	{
		header("location:../login_medical.php");
	}
$uname1= $_POST['uid_txt'];
	$pass1= $_POST['pass_txt'];

	$qry1= "SELECT * FROM medical_store WHERE user_id='".$uname1."' ";
$rs1= mysqli_query($conn,$qry1);
	if (mysqli_num_rows($rs1) > 0)
	{
      $row = mysqli_fetch_assoc($rs1);
      $veri=$row['verification_code'];
      if($veri == "0")
      {
     
      	header('location:../verification_medical.php');
exit();
      }
    
	}

$qry2= "SELECT * FROM medical_store WHERE user_id='".$uname1."' ";
$rs2= mysqli_query($conn,$qry2);
	if (mysqli_num_rows($rs2) > 0)
	{
      $row2 = mysqli_fetch_assoc($rs2);
      $veri1=$row2['isactive'];
      if($veri1 == "2")
      {
     
      	header('location:../login_medical.php?er_ms1=your account is not activated yet plz contact admin');
exit();
      }
    
	}
	$uname = $_POST['uid_txt'];
	$pass = $_POST['pass_txt'];

	$qry = "SELECT * FROM medical_store WHERE user_id='".$uname."' AND password='".$pass."'";
	echo "$qry";
	$rs = mysqli_query($conn,$qry);
	if (mysqli_num_rows($rs) > 0)
	{
		$row = mysqli_fetch_assoc($rs);
		$_SESSION['user_medical']=$row['user_id'];
		$_SESSION['common_user']=$row['user_id'];
		$_SESSION['user_type']="MedicalStore";
		//Coockies
		if(isset($_POST['remember']))
		{
			setcookie("user", $uname, time() + (86400 * 1), "/"); // 86400 = 1 day
			echo "set1";
			setcookie("password", $pass, time() + (86400 * 1), "/"); // 86400 = 1 day
		}
		header("location:../existingmedical.php");
	}
	else
	{
		header("location:../login_medical.php?er_ms=you have enter wrong user-id or password");
		setcookie($_COOKIE['user'],null,-1,"/");
		setcookie("password",null,-1,"/");
	}

?>