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
    if(Trim(f.captcha.value)=="")
    {
		alert("Please Enter Your Captchred");
		f.captcha.value="";
		f.captcha.focus();
		return false;
    }
	f.action='loginpage/usrlog_loginchk.php';
	f.method='post';
	f.submit();
	
	
	
	
	return true;
}
</script>
<script src="datetimepicker_css.js"></script>
<?php include("../includes/head_files.php") ?>
<body>

<!--xxxxxxxxxxxxxxxxxxxx HEADER PART xxxxxxxxxxxxxxxxxxxxxxx-->

<?php include("../includes/header.php") ?>

<!--xxxxxxxxxxxxxxxxxxxx CONTENT PART xxxxxxxxxxxxxxxxxxxxxxx-->

<div class="content">
<?php include("../includes/left_menu.php") ?> 

<div class="content_midile">

<?php // include("includes/sell_leads_buy_leads.php") ?>


<h3>Login Page</h3>
<div class="clear"></div>
<form action="usrlog_loginchk.php" method="post" name="form_F" enctype="multipart/form-data" onSubmit="javascript: return valid();">
<input type="hidden" name="id_f" id="id_f" value="<?php if(!empty($_REQUEST['id'])){ echo $id; }  ?>">
<table width="100%" border="0">
    <tr>
        <td colspan="3" align="center"><span class="redtext" style="color:#F00"><strong><?php echo $msg; ?></strong></span></td>
    </tr>
   <tr>
        <td width="7%">&nbsp;</td>
        <td width="16%"><strong>User ID:</strong></td>
        <td width="77%" ><input class="inputselect" type='text' name='userLogin_f' id='userLogin_f' maxlength="1000" placeholder="Email ID"/></td>
    </tr>
    
    <tr>
         <td width="7%" height="78">&nbsp;</td>
		 <td align="left"><strong>Password</strong></td>
         <td align="left"><input type="password" name="passwd_f" id="passwd_f" class="inputselect" maxlength="12">
    	 Enter the contents of image<input type="text"  class="input1" name="captcha" id="captcha" maxlength="6" size="6"/>
    	 <img src="captcha.php"/></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="submit" name="submit" value="Submit" class="submit" ></td>
    </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td class="style2" ><a href="list-your-business-free-with-us.php" class="submit">SingUp</a> &nbsp; <a href="forgotpassword.php" class="btn btn-default btn-block">Forgot Password</a>  </td>
        </tr>
</table>
</form>
<div class="clear"></div>

<div class="bottom_ads">
<a href="#"><img src="images/ads1.jpg" alt="" title="" /></a>
<div class="clear"></div>
<a href="#"><img src="images/ads2.jpg" alt="" title="" /></a>
<div class="clear"></div>
<a href="#"><img src="images/ads3.jpg" alt="" title="" /></a>
<div class="clear"></div>
<a href="#"><img src="images/ads4.jpg" alt="" title="" /></a>
</div>


</div>

<!--xxxxxxxxxxxxxxxxxxxx RIGHT ADS PART xxxxxxxxxxxxxxxxxxxxxxx-->

<?php include("../includes/right_ads.php") ?>

</div>

<div class="clear"></div>


<!--xxxxxxxxxxxxxxxxxxxx FOOTER PART xxxxxxxxxxxxxxxxxxxxxxx-->

<?php include("../includes/footer.php") ?>


</body>
</html>