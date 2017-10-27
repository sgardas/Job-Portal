<html>
<head>
<script language="javascript" type="text/javascript">
function MSent_msg()
{
alert("Thanks for your posting with job sketch");
window.open("index.php?msg=MSent","_self");
}
function MFail_msg()
{
alert("Message not sent and Query not Updated! Please Try Again Later");
window.open("index.php?msg=MFail","_self");
}
function mandatory_msg()
{
alert("Sorry! Fields are mandatory!");
window.open("index.php?msg=Mandatory","_self");
}

</script>
</head>
<body>
<?php 
ob_start();
define("MAX_SIZE",2000000);

$to = "nilesh.karre@jobsketch.com"; // To whom to send the MAIL..

$from = $_REQUEST['email']; // From whom the MAIL came..


if(!empty($_REQUEST['email'])) {
	$message = '';
	$email 		 = $_REQUEST['email'];

	$subject = "Message received regarding ."; // Subjects writtens on MAIL..
	$headers = "From: $from\r\n";
	$headers .= "MIME-Version: 1.0\r\n"
	  ."Content-Type: multipart/mixed; boundary=\"1a2a3a\"";
	// Write the mail message(body) in Language Manner.. 
	$message .= "If you can see this MIME than your client doesn't accept MIME types!\r\n"."--1a2a3a\r\n";
	$message .= "Content-Type: text/html; charset=\"iso-8859-1\"\r\n"."Content-Transfer-Encoding: 7bit\r\n\r\n"
	  ."Dear Job Sketch, \r\n"
	  ." <p><span style='color:#0066FF'><strong>Newsletter Subscribe Email ID:&nbsp;$email</strong></span></p> \r\n"."--1a2a3a\r\n";	

	$success = mail($to,$subject,$message,$headers);
	if (!$success) {
		$msg = "MFail";
		 echo "<script language='javascript' type='text/javascript'>MFail_msg()</script>";
	//	echo "Mail to " . $to . " failed .";
	}else {
		$msg = "MSent";
     	echo "<script language='javascript' type='text/javascript'>MSent_msg()</script>";
	//	echo "Success : Mail was send to " . $to ;
   	}
} else {
		$msg = "Mandatory";
     	echo "<script language='javascript' type='text/javascript'>mandatory_msg()</script>";
}