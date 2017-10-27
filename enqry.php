<html>
<head>
<script language="javascript" type="text/javascript">
function MSent_msg()
{
alert("Thanks for your posting with job sketch");
window.open("enquiry.php?msg=MSent","_self");
}
function MFail_msg()
{
//alert("Message not sent and Query not Updated! Please Try Again Later");
window.open("enquiry.php?msg=MFail","_self");
}
function mandatory_msg()
{
//alert("Sorry! Fields are mandatory!");
window.open("enquiry.php?msg=Mandatory","_self");
}

</script>
</head>
<body>
<?php 
ob_start();
define("MAX_SIZE",2000000);
$to = "nilesh.karre@jobsketch.com"; // To whom to send the MAIL..
$from = $_REQUEST['email_f']; // From whom the MAIL came..

if(!empty($_REQUEST['id'])) {
	$id 			   = base64_decode($_REQUEST['id']);
	}
if(!empty($_REQUEST['submit'])   ) {

	$message = '';
	$name	 = $_REQUEST['name_f'];
	$email 		 = $_REQUEST['email_f'];
	$phone	 = $_REQUEST['phone_f'];
	$experience	 = $_REQUEST['experience_f'];
	$job 		 = $_REQUEST['job_f'];
	$presentsal	 = $_REQUEST['presentsal_f'];
	$expsal 		 = $_REQUEST['expsal_f'];
	$message1	 = $_REQUEST['message_f'];
	$filename1   = $_FILES["image"]["name"];
	
	 
	$subject = "Message received regarding ."; // Subjects writtens on MAIL.. 
	$headers = "From: $from\r\n";
	$headers .= "MIME-Version: 1.0\r\n" 
	  ."Content-Type: multipart/mixed; boundary=\"1a2a3a\"";
	// Write the mail message(body) in Language Manner.. 
	$message .= "If you can see this MIME than your client doesn't accept MIME types!\r\n"."--1a2a3a\r\n";
	$message .= "Content-Type: text/html; charset=\"iso-8859-1\"\r\n"."Content-Transfer-Encoding: 7bit\r\n\r\n"
	 ."Dear, Job Sketch \r\n"
	  ." <p>A mail received from $name. The Following are the Personal details.</p> \r\n"
	  ." <p><span style='color:#0066FF'><strong>Name:&nbsp;</strong></span>$name</p> \r\n"
	  ." <p><span style='color:#0066FF'><strong>E-mail:&nbsp;</strong></span>$email</p> \r\n"
	  ." <p><span style='color:#0066FF'><strong>Phone:&nbsp;</strong></span>$phone</p> \r\n"
	  ." <p><span style='color:#0066FF'><strong>Total Work Experience (Years):&nbsp;</strong></span>$experience</p> \r\n"
	  ." <p><span style='color:#0066FF'><strong>What kind of job you are looking for?:&nbsp;</strong></span>$job</p> \r\n"
	  ." <p><span style='color:#0066FF'><strong>Present C.T.C:&nbsp;</strong></span>$presentsal</p> \r\n"
	  ." <p><span style='color:#0066FF'><strong>Expected C.T.C:&nbsp;</strong></span>$expsal</p> \r\n"
	 ." <p><span style='color:#0066FF'><strong>Message:&nbsp;</strong></span>$message1</p> \r\n"
	 ." <p>&nbsp;</p> \r\n"
	  ." <p>&nbsp;</p> \r\n"
	  ." <p>&nbsp;</p> \r\n"
	  ." <p><span style='color:#0066FF'><strong>Warm Regards</strong></span></p> \r\n"
	  ." <p><span style='color:#0066FF'><strong>$name</strong></span></p> \r\n"
	  ." <p><span style='color:#0066FF'><strong>Email ID:&nbsp;$email</strong></span></p> \r\n"."--1a2a3a\r\n";	

	
	function makeRandomusername() { 
			//  $salt = "abchefghjkmnpqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"; 
			  $salt = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"; 
			  srand((double)microtime()*1000000);  
			  $i = 0; 
			  $username = '';
			  while ($i <= 8) { 
					$num = rand() % 33; 
					$tmp = substr($salt, $num, 1); 
					$username = $username . $tmp; 
					$i++; 
			  } 
			  return $username; 
		} 
	$db_username = makeRandomusername(); 
	if($_FILES['image']['name']!='') {
		$uploaddir="uploadeddocs/";
		$filename1 = $_FILES['image']['name'];
		$docs1 = $db_username."-".$filename1;
		$uploadfile1 = $uploaddir.$docs1;
		move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile1);
	}

	//Query for Upload the image of patient --End--
	if(isset($uploadfile1)){
		$file1 = file_get_contents($uploadfile1);
		$message .= "Content-Type: image/jpg; name=\"$filename1\"\r\n"
		  ."Content-Transfer-Encoding: base64\r\n"
		  ."Content-disposition: attachment; file=\"$filename1\"\r\n"
		  ."\r\n"
		  .chunk_split(base64_encode($file1))
		  ."--1a2a3a--";
	} else {
		$file1 = '';
		$message .= "Content-Type: text/html; charset=\"iso-8859-1\"\r\n"."Content-Transfer-Encoding: 7bit\r\n\r\n"."--1a2a3a\r\n";
	}
	
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

?>