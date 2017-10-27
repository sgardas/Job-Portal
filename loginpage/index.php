<?php 
if(isset($_REQUEST['msg'])){
	if($_REQUEST['msg'] == 'abuse'){
		$msg = "Please Contact Your Admin";
	} else if($_REQUEST['msg'] == 'sorry'){
		$msg = "Sorry, You are not Login Properly";
	} else if($_REQUEST['msg'] == 'logout'){
		$msg = "Successfully Logged Out.";
	} else if($_REQUEST['msg'] == 'contactinv'){
		$msg = "Invalid User ID or Password";
	} else if($_REQUEST['msg'] == 'notassgnd'){
		$msg = "Not Assigned";
	} else if($_REQUEST['msg'] == 'invalid'){
		$msg = "Invalid User ID or Password";
	} else if($_REQUEST['msg'] == 'alreadyexists'){
		$msg = "Already Exists";
	} else if($_REQUEST['msg'] == 'Mandatory'){
		$msg = "Fields Are Mandatory";
	} else if($_REQUEST['msg'] == 'incorrect'){
		$msg = "Sorry! You have already submited the Request.";
	} else if($_REQUEST['msg'] == 'loginhere'){
		$msg = "Wel Come! Login Here with your Credentials.";
	} else {
		$msg = "";
	}
} else {
	$msg = "Login Credentials";
}
?>
<script language="javascript">
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
	var f = document.form_F;
    var em=/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
    if(Trim(f.userLogin_f.value)=="")
    {
		alert("Please Enter Your Email Address");
		f.userLogin_f.value="";
		f.userLogin_f.focus();
		return false;
    }
    if(Trim(f.passwd_f.value)=="")
    {
		alert("Please Enter Your Password");
		f.passwd_f.value="";
		f.passwd_f.focus();
		return false;
    }
	f.action='usrlog_loginchk.php';
	f.method='post';
	f.submit();
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
			<p class="text-center">
			
			<h2><a href="index">Job Poartal</a></h2>
			
			</p>
			<div class="login-wrap animated flipInX">
				<div class="login-block">
					<img src="images/users/default-user.png" width="160" class="img-circle not-logged-avatar">
                    <!--<form role="form" action="home.php">-->
						<span style="color:#F00"><strong><?php echo $msg; ?></strong></span>
                        <form action="usrlog_loginchk.php" method="post" name="form_F" enctype="multipart/form-data" onSubmit="javascript: return valid();">
						<div class="form-group login-input">
						<i class="fa fa-user overlay"></i>
						<input type="text" class="form-control text-input" placeholder="Email ID" name="userLogin_f" id="userLogin_f">
						</div>
						<div class="form-group login-input">
						<i class="fa fa-key overlay"></i>
						<input type="password" class="form-control text-input" placeholder="********"  name="passwd_f" id="passwd_f">
						</div>
						
					  <div class="row">
							<div class="col-sm-6">
                            <input type="submit" name="submit" value="Submit" class="btn btn-success btn-block">
							</div>
							<div class="col-sm-6">
							<a href="forgotpassword.php" class="btn btn-default btn-block">Forgot Password</a>
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