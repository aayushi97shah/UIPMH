<?php
session_start();

if(isset($_SESSION['user_patient']))
{
	header('location:patient_dashboard.php');
}
if(isset($_SESSION['user_doctor']))
{
	header('location:doctor_dashboard.php');
}
if(isset($_SESSION['user_lab']))
{
	header('location:existinglaboratory.php');
}
if(isset($_SESSION['user_medical']))
{
	header('location:existingmedical.php');
}

?>