<?php include("header2.php"); ?>
	
		
		
		<!-- /// CONTENT  /////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="span12" style="width:100%; padding:0;" >
                    	
                        <div class="headline">
                        	
                      
                        <img src="assets/images/enquiry.jpg" />     
                        </div><!-- end .headline -->
                        
                    </div>
			<!-- end #page-header -->
 
 
 
 
            
            
<div class="content" style="background-color:burlywood;">
<div class="container">
    <!-- end .spsn12 -->

<div class="row"  >

    <div class="span12" >
  
    <div class="span3">
          <p style="background-color:#f9b125; padding:10px; color:#FFF; font-size:12px;">As a best practice company, we realize that the little things make the most difference. </p>
        <img src="assets/images/best_practices.jpg" />  
       
        
    </div><!-- end .span3 -->
   
    <div class="span9" style="padding-top:0em;">
  
    <div class="span12" >
    <div class="wrap">

    <div class="main">
    <p style="padding:0.2em 0.5em; color:#666666; font-size:20px; ">Welcome to &nbsp;<span style="font-size:28px; color:#000000; font-weight:600;" >Job</span><span style="font-size:28px;color:#f49521;font-weight:600;" >Sketch </span></p> 
   <script>
function valid2(){
	var f = document.form_F1;
	
	
/*	if(f.6_letters_code.value == ''){
		alert("Please Enter Code");
		f.6_letters_code.focus();
		return false;
	}*/
	
	
	
	 var letter = /^[A-Za-z. ]+$/;
	if(f.fname_f.value == ''){
		alert("Please Enter Name");
		f.fname_f.focus();
		return false;
	}
	
	
	else if(!letter.test(f.fname_f.value))
	 	  {
 	      alert("Please Enter only Alphabates");
 	      f.fname_f.focus();
  	      return false;
 	      }
		  
	if(f.email_f.value == ''){
		alert("Please Enter E-mail-Id");
		f.email_f.focus();
		return false;
	}
	 var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		  if(!filter.test(f.email_f.value)){
		  alert("Please enter the valid email");
		  f.email_f.focus();
		  return false;		
		  }
	
	if(f.password_f.value == ''){
		alert("Please Enter Password");
		f.password_f.focus();
		return false;
	}
	
	if(f.mobile_f.value == ''){
		alert("Please Enter Mobile Number");
		f.mobile_f.focus();
		return false;
	}
	
	 var val = f.mobile_f.value
          if (/^\d{10}$/.test(val)) {
          // value is ok, use it
          } else {
          alert("Invalid number; must be ten digits")
          f. mobile_f.focus();
          return false;
          }
		  
	
if(f.addrs_f.value == ''){
		alert("Please Enter Address");
		f.addrs_f.focus();
		return false;
	}
	
	return true;
}
</script>
<script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
<script language="JavaScript" src="scripts/gen_validatorv31.js" type="text/javascript"></script>	
<div id='contact_form_errorloc' class='err'></div>
<?php 
$your_email ='yourname@your-website.com';// <<=== update to your email address

//session_start();
$errors = '';
$name = '';
$visitor_email = '';
$user_message = '';

if(isset($_POST['submit']))
{
	
/*	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$user_message = $_POST['message'];
	///------------Do Validations-------------
	if(empty($name)||empty($visitor_email))
	{
		$errors .= "\n Name and Email are required fields. ";	
	}
	if(IsInjected($visitor_email))
	{
		$errors .= "\n Bad email value!";
	}*/
	if(empty($_SESSION['6_letters_code'] ) ||
	  strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
	{
	//Note: the captcha code is compared case insensitively.
	//if you want case sensitive match, update the check above to
	// strcmp()
		$errors .= "\n The captcha code does not match!";
	}
	
	/*if(empty($errors))
	{
		//send the email
		$to = $your_email;
		$subject="New form submission";
		$from = $your_email;
		$ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
		
		$body = "A user  $name submitted the contact form:\n".
		"Name: $name\n".
		"Email: $visitor_email \n".
		"Message: \n ".
		"$user_message\n".
		"IP: $ip\n";	
		
		$headers = "From: $from \r\n";
		$headers .= "Reply-To: $visitor_email \r\n";
		
		mail($to, $subject, $body,$headers);
		
		header('Location: thank-you.html');
	}*/
}

// Function to validate against any email injection attempts
/*function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}	
*/?>
            <form name="form_F1" method="post" action="loginpage/usrlog_loginchkemp.php" onSubmit="javascript: return valid2();" enctype="multipart/form-data">
            <input type="hidden" name="id_f" id="id_f" value="<?php if(!empty($id)) { echo $id; } ?>" />  
                <fieldset>
<style>
table, th, td {
border:none; 
}
th, td {
padding:0;
color:#FFFFFF;
vertical-align: middle;
}
table p{
font-size:14px;
color:#000000;
padding-top:10px;
}
</style>
                    <div id="formstatus"></div>
                    <table >
                   
                    <tr>
                    <td><p>Full Name <span>*</span></p></td>
                    <td>
                        <input class="span12" type="text" name="fname_f"  id="fname_f">
                    </td>
                    </tr>
                    
                       <tr>
                    <td><p>Email ID <span>*</span></p></td>
                    <td>
                        <input class="span12" type="text" name="email_f"  id="email_f">
                    </td>
                    </tr>
                    
                       <tr>
                    <td><p>Password <span>*</span></p></td>
                    <td>
                        <input class="span12" type="password" name="password_f"  id="password_f">
                    </td>
                    </tr>
                    
                       <tr>
                    <td><p>Mobile Number  <span>*</span></p></td>
                    <td>
                        <input class="span12" type="text" name="mobile_f"  id="mobile_f">
                    </td>
                    </tr>
                    
                    
                <tr>
                    <td><p>Address <span>*</span></p></td>
                    <td>
                    
                       <input class="span12" type="text" name="addrs_f"  id="addrs_f" > 
                   </td>
                    </tr>
               <?php /*?> <tr>
                    <td><p>Which year</p></td>
                    <td>
                    
                       <input class="span12" type="text" id="year_f" name="year_f"> 
                   </td>
                    </tr>
                <tr>
                    <td><p>Total GPA</p></td>
                    <td>
                    
    
                       <input class="span12" type="text" name="gpa_f" id="gpa_f" > 
                    </td>
                    </tr>
                <tr>
                    <td><p>Branch</p></td>
                    <td>
                       <input class="span12" type="text" name="branch_f" id="branch_f" > 
                         <select class="span12" name="subbranch_f" id="subbranch_f">
                  <option value="">Sub-Branch</option>
                  <option value="1">ECE</option>
                  <option value="2">EEE</option>
                  <option value="3">CSE</option>
                  </select>
                   </td>
                  </tr>
               
                    <td><p>Attach Resume</p></td>
                    <td>
                    
                       <input class="span12" type="file" id="upfiles" name="upfiles" value="" placeholder="Upload Resume"> 
                  
                    </td></tr><?php */?>
                    
                    
                    <?php /*?> <tr>
                    <td><p style=" width:100%">
                    <img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' ><br>
                    <label for='message'>Enter the code above here :</label><br></p></td>
                   <td> <input id="6_letters_code" name="6_letters_code" type="text"><br>
                    <small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small>
                    </p></td>
                    </td></tr><?php */?>
                    
                    
                    <tr><td></td><td style="padding-top:2em;">
                    <p class="last">
                        <input id="submit" class="btn btn-primary" type="submit" name="submit" value="Submit" >
                    </p></td></tr></table>
                </fieldset>
            </form>
                  
              </div>
              
    </div>
    </div>
    
    </div>

</div>
</div>
</div><!--end .main-->
</div>


<?php /*?><script language="JavaScript">
// Code for validating the form
// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
// for details
var frmvalidator  = new Validator("contact_form");
//remove the following two lines if you like error message box popups
frmvalidator.EnableOnPageErrorDisplaySingleBox();
frmvalidator.EnableMsgsTogether();

//frmvalidator.addValidation("name","req","Please provide your name"); 
//frmvalidator.addValidation("email","req","Please provide your email"); 
//frmvalidator.addValidation("email","email","Please enter a valid email address"); 
</script>
<?php */?>
    
<style>
/*----- Tabs -----*/
/*----- Tabs -----*/
.tabs {
	width:100%;
	display:inline-block;
}

	/*----- Tab Links -----*/
	/* Clearfix */
	.tab-links:after {
		display:block;
		clear:both;
		content:'';
	}

	.tab-links li {
		margin:0px 65px;
		
		float:left;
		list-style:none;
	}

		.tab-links a {
		text-decoration: none;
    padding: 9px 15px;
    display: inline-block;
    border-radius: 3px 3px 0px 0px;
    background:#fff;
    font-size: 16px;
    font-weight: 600;
    color: #999;
    transition: all linear 0.15s;
		}

		.tab-links a:hover {
			background:#FF6600;
			text-decoration:none;
		}

	.tabs li.active a,.tabs  li.active a:hover {
		background:#FF6600;
		color:#fff;
	}

	/*----- Content of Tabs -----*/
	.tab-content {
		padding:15px;
		border-radius:3px;
		/*box-shadow:-1px 1px 1px rgba(0,0,0,0.15);*/
		background:#fff;
	}

		.tab {
			display:none;
		}

		.tab.active {
			display:block;
		}
</style>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>
jQuery(document).ready(function() {
	// Standard
	jQuery('.tabs.standard .tab-links a').on('click', function(e)  {
		var currentAttrValue = jQuery(this).attr('href');

		// Show/Hide Tabs
		jQuery('.tabs ' + currentAttrValue).show().siblings().hide();

		// Change/remove current tab to active
		jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

		e.preventDefault();
	});

	// Animated Fade
	jQuery('.tabs.animated-fade .tab-links a').on('click', function(e)  {
		var currentAttrValue = jQuery(this).attr('href');

		// Show/Hide Tabs
		jQuery('.tabs ' + currentAttrValue).fadeIn(400).siblings().hide();

		// Change/remove current tab to active
		jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

		e.preventDefault();
	});

	// Animated Slide 1
	jQuery('.tabs.animated-slide-1 .tab-links a').on('click', function(e)  {
		var currentAttrValue = jQuery(this).attr('href');

		// Show/Hide Tabs
		jQuery('.tabs ' + currentAttrValue).siblings().slideUp(400);
		jQuery('.tabs ' + currentAttrValue).delay(400).slideDown(400);

		// Change/remove current tab to active
		jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

		e.preventDefault();
	});

	// Animated Slide 2
	jQuery('.tabs.animated-slide-2 .tab-links a').on('click', function(e)  {
		var currentAttrValue = jQuery(this).attr('href');

		// Show/Hide Tabs
		jQuery('.tabs ' + currentAttrValue).slideDown(400).siblings().slideUp(400);

		// Change/remove current tab to active
		jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

		e.preventDefault();
	});
});

</script>



<style>
@media(max-width:1366px){
input[type="text"], input[type="password"], input[type="date"], input[type="datetime"], input[type="datetime-local"], input[type="month"], input[type="week"], input[type="email"], input[type="number"], input[type="search"], input[type="tel"], input[type="time"], input[type="url"], input[type="color"], textarea {
display: block;
width: 100%;
-webkit-appearance: none;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
padding: 10px 20px;
border: 0;
margin-bottom: 1px;
background-color: #f0efef;
color: #222;
border: 1px solid rgba(34,34,34,0.5);
/* box-shadow: 2px 3px 10px grey; */
border-radius: 5px;
}
table {
border-collapse: separate;
border-spacing: 0;
border-width: 1px 0 0 1px;
margin-bottom: 20px;
table-layout: fixed;
width: 75%;
}
}
@media(max-width:425px){

table {
border-collapse: separate;
border-spacing: 0;
border-width: 1px 0 0 1px;
margin-bottom: 20px;
table-layout: fixed;
width: 100%;
}
}
</style>         

               
<?php include("footer.php")?>