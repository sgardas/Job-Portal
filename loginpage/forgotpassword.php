<?php
ob_start();
session_start();
include_once("includes/application.php");
include_once("includes/class.CommonFunc.php");
 
if(isset($_REQUEST['msg'])){
	if($_REQUEST['msg'] == 'Mismatch'){
		$msg = "Entered Email Id doesn't Match";
	} else if($_REQUEST['msg'] == 'MailSent'){
		$msg = "Successfully your password sent to your Email ID";
	} else if($_REQUEST['msg'] == 'MailFailed'){
		$msg = "Message Failed, Contact Administrator";
	}else {
		$msg = "";
	}
} else {
	$msg = "Forgot Password";
}
?><script language="javascript">
function Trim(str)
{
	while(str.charAt(0) == (" ") )
	{
		str = str.substring(1);
	}
	while(str.charAt(str.length-1) == " " )
	{
		str = str.substring(0,str.length-1);
	}
	return str;
}
function isAlphaNumeric1(val)
{
	if (val.match(/^[0-9]+$/))
	{
		return true;
	}
	else
	{
		return false;
	}
}
function count1(str)
{
	var str1=str.value.length;
	if(str1>=100)
	{
		alert("Maximum 100 characters");
		str.value=str.value.substring(0,99);
		return(str);
	}
}
function isEmpty(s)
{ 
	return ((s == null) || (s.length == 0)) 
}

function isWhitespace(s)
{
	var i;
	var whitespace = " \t\n\r";
	if (isEmpty(s)) return true;
	// Search through string's characters one by one
	// until we find a non-whitespace character.
	// When we do, return false; if we don't, return true.
	for (i = 0; i < s.length; i++)
	{
		// Check that current character isn't whitespace.
		var c = s.charAt(i);
		if (whitespace.indexOf(c) == -1) return false;
	}
	// All characters are whitespace.
	return true;
}	
function valid(){
	var f = document.F_heading;
    var em=/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
    if(Trim(f.emailid_f.value)=="")
    {
		alert("Please Enter Your Email Address");
		f.emailid_f.value="";
		f.emailid_f.focus();
		return false;
    }
//	f.action='usrlog_loginchk.php';
//	f.method='post';
//	f.submit();
	return true;
}
</script>
<!DOCTYPE html>
<html>
<head>

<?php include("includes/head_links.php") ?>

</head>

    <body class="fixed-left login-page">
        <!-- Modal Start -->


	

	<div class="container">
		<div class="full-content-center">
			<p class="text-center"><a href="#"><h2>Rental</h2></a></p>
			<div class="login-wrap animated flipInX">
				<div class="login-block">
					<img src="images/users/default-user.png" width="160" class="img-circle not-logged-avatar">
					<span style="color:#F00"><strong><?php echo $msg; ?></strong></span>
                    <form name="F_heading" id="F_heading" method="POST" action="" enctype="multipart/form-data" onSubmit="javascript: return valid();">
						<div class="form-group login-input">
						<i class="fa fa-user overlay"></i>
						<input type="text" class="form-control text-input" placeholder="Email ID" name="emailid_f" id="emailid_f">
						</div>
						<div class="row">
							<div class="col-sm-6">
                            <input type="submit" name="submit" value="Submit" class="btn btn-success btn-block">
							</div>
							<div class="col-sm-6">
							<a href="index.php" class="btn btn-default btn-block">Back</a>
							</div>
						</div>
					</form>
				</div>
			</div>
			
		</div>
	</div>
	<!-- the overlay modal element -->
	<div class="md-overlay"></div>
	<!-- End of eoverlay modal -->

	</body>

</html>
<?php 
if(!empty($_REQUEST['submit'])) {
	$emailid  = $_REQUEST['emailid_f'];
	$selcountqry = $db->getCount("select count(*) from users_m_t where user_email = '".$emailid."' and user_status = '1'");
	$selviewqry = $db->fetchArray($db->query("select * from users_m_t where user_email = '".$emailid."' and user_status = '1'"));
	$name = $selviewqry['user_firstname']." ".$selviewqry['user_lastname'];
	$mail = $selviewqry['user_email'];
	$contact = $selviewqry['user_cellphone'];

	$subject = "Sjinfotech Login Credentials for Password Reset Request"; // Subjects writtens on MAIL..
	
	if($selcountqry > 0){
		function RandomString($length) {
			$keys = array_merge(range(0,9), range('a', 'z'));
			$key = '';
			for($i=0; $i < $length; $i++) {
				$key .= $keys[array_rand($keys)];
			}
			return $key;
		}
		$newpassword = RandomString(10);
		$to = $_REQUEST['emailid_f']; // From whom the MAIL came..
		$from = "customer@esars.com"; // To whom to send the MAIL..
	
		$headers = "From: $from\r\n";
		$headers .= "MIME-Version: 1.0\r\n"
		  ."Content-Type: multipart/mixed; boundary=\"1a2a3a\"";
		// Write the mail message(body) in Language Manner.. 
		$message .= "If you can see this MIME than your client doesn't accept MIME types!\r\n"
		  ."--1a2a3a\r\n";
		$message .= "Content-Type: text/html; charset=\"iso-8859-1\"\r\n"
		  ."Content-Transfer-Encoding: 7bit\r\n\r\n"
		  ."Hi, \r\n"
		  ." <p>Your password has been reset and changed to as mentioned below</p> \r\n"
		  ." <p>Password: <strong>$newpassword</strong>&nbsp;Kinldy Login with this password only.</p> \r\n"
		  ." <p>&nbsp;</p> \r\n"
		  ." <p>&nbsp;</p> \r\n"
		  ." <p>Warm Regards:</p> \r\n"
		  ." <p>Admininstrator</p> \r\n"
		  ." <p>Email ID.:rk081988@gmail.com</p> \r\n";
	 	 
		$success = mail($to,$subject,$message,$headers);
		if (!$success) {
			$msg = "MailFailed";
		//	echo "Mail to " . $to . " failed .";
		}else {
			$insqry = $db->insert("update users_m_t set
									user_pwd  	= encode('".$newpassword."','vsvtech')
									where user_name = '".$emailid."'
									and user_email = '".$emailid."'
									and user_status = '1'");
			$msg = "MailSent";
		//	echo "Success : Mail was send to " . $to ;
		}
	} else {
		$msg = "Mismatch";  
	}
	header("location:forgotpassword.php?msg=$msg");
}
?>