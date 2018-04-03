<?php
session_start();
require 'PHPMailer/PHPMailerAutoload.php';

// if(!isset($_POST['submit']))
// {
// 	echo "Direct URL Called";
// 	exit();
// }
	// $name=$_POST['fnm_txt'];

	$cont=$_SESSION['contact'];
	$sum=0;
	$temp=0;
$no=$cont;
	while($no!=0)
	{
		$temp=$no%10;
		$sum=$sum+$temp;
		$no=$no/10;
	}
	$v_id=$sum%20;
	require "connection.php";
	 $sel="SELECT * FROM verification WHERE id='".$v_id."'";
  $rs=mysqli_query($conn,$sel);
 

  if(mysqli_num_rows($rs)>0)
  {
    while($data=mysqli_fetch_assoc($rs))
    {
      
      $verification=$data['code'];

    }
  }


	$email=$_SESSION['email_lab'];
	


	$body="Your Registration is Successful.
	Carefully Enter given verification code for Successful login to the system...
	verification code:$verification
		 ";

	//echo $body;

	$sub="Contact Form Submitted From Website";
	$mail = new PHPMailer;

	$mail->isSMTP();                                   // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                            // Enable SMTP authentication
	$mail->Username = 'uipmhtest@gmail.com';          // SMTP username
	$mail->Password = 'aayushi1997'; // SMTP password
	$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                 // TCP port to connect to

	$mail->setFrom('uipmhtest@gmail.com', 'uipmh');
	$mail->addReplyTo('uipmhtest@gmail.com', 'uipmh');
	$mail->addAddress($email);   // Add a recipient
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');
	$mail->isHTML(true);  // Set email format to HTML

	$bodyContent = $body;
	
	$mail->Subject = $sub;
	$mail->Body    = $bodyContent;

	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    echo 'Message has been sent';
	    header('location:verification_medical.php');
	}

?>
