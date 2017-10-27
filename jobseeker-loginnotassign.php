
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    
	<title>Job Sketch</title>
	<meta name="description" content=" add description  ... ">
    
    <!-- /// Favicons ////////  -->
   <!-- <link rel="shortcut icon" href="favicon.png">
	<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
	<meta name="msapplication-TileColor" content="#f9b125">
	<meta name="msapplication-TileImage" content="mstile.png">-->
	<meta name="theme-color" content="#f9b125">
	
	
	<!-- /// Google Fonts ////////  -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,800,800italic">
    
    <!-- /// FontAwesome Icons 4.3.0 ////////  -->
	<link rel="stylesheet" href="assets/fonts/fontawesome/font-awesome.min.css">
    
    <!-- /// Custom Icon Font ////////  -->
    <link rel="stylesheet" href="assets/fonts/iconfontcustom/icon-font-custom.css">  
    
	<!-- /// Plugins CSS ////////  -->
	<link rel="stylesheet" href="assets/vendors/revolutionslider/css/settings.css">
    <link rel="stylesheet" href="assets/vendors/bxslider/jquery.bxslider.css">
	<link rel="stylesheet" href="assets/vendors/magnificpopup/magnific-popup.css">
    <link rel="stylesheet" href="assets/vendors/animations/animate.min.css">
	<link rel="stylesheet" href="assets/vendors/itplayer/css/YTPlayer.css">
	
	<!-- /// Template CSS ////////  -->
	<link rel="stylesheet" href="assets/css/reset.css">
	<link rel="stylesheet" href="assets/css/grid.css">
	<link rel="stylesheet" href="assets/css/elements.css">
	<link rel="stylesheet" href="assets/css/layout.css">
	<link rel="stylesheet" href="assets/css/components.css">
	<link rel="stylesheet" href="assets/css/wordpress.css">
    
	<!-- /// Boxed layout ////////  -->
    
    <link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="assets/css/default.css" />
       
        <link rel="stylesheet" type="text/css" href="assets/css/main-style.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/component.css" />
		<script src="assets/js/modernizr.custom.js"></script>
	<!-- <link rel="stylesheet" href="assets/css/boxed.css"> -->
   
    <!-- /// Template Skin CSS ////////  -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<!-- <link rel="stylesheet" href="assets/css/skins/default.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/skins/blue.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/skins/green.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/skins/purple.css"> -->
 
 	
    
</head>
<body >
	
    
    
	<div id="wrap">
		<div id="header-wrap">
			<div id="header"  style=" z-index:999999; ">
			
			<!-- /// HEADER  //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

                     <!--<div class="span2" style="float:right; height:50px; background-color:#CCCCCC; color:#000000;">
                   
                                <ul class="sf-menu fixed" id="menu">
                                    <li>
                                    	<a href="index.php"><span>Home</span></a>
                                        
                                    </li> 
                                    <li >
                                        <a href="page-left-sidebar.php"><span>About us</span></a></li></ul>
                     
                     </div>-->
                    
                    
                    
                   
                    
                    
                    
				<div class="container">
                    <div class="row">
                        <div class="span3">
                        
                            <!-- // Logo // -->
                            <div id="logo">
                                <a href="index.php">
                               <!-- <h1 style="font-size:45px; text-transform:uppercase; padding-top:0.8em;">Job Sketch</h1>-->
                                    <img src="assets/images/logo.jpg" alt="website logo"  style="vertical-align:bottom; width:65px;">
                                </a>
                            </div>
                        
                        </div><!-- end .span3 -->
                        <div class="span9" >
                        
                            <!-- // Mobile menu trigger // -->
                            
                            <a href="#" id="mobile-menu-trigger">
                                <i class="fa fa-bars"></i>
                            </a>
                            
                            <!-- // Custom search // -->                                        
                            
                           <!-- <form action="#" id="custom-search-form" method="get" role="search">
                        		<input id="s" type="text" name="s" placeholder="">
                                <input id="custom-search-submit" type="submit" value="">
                            </form>-->
                            
                            <!-- // Menu // -->
                            
                            <nav>
                                <ul class="sf-menu " id="menu">
                                    <li>
                                    	<a href="index.php"><span>Home</span></a>
                                        
                                    </li> 
                                     <li ><a href="openings.php"><span>Current Openings </span></a>	</li>									
									
                                    
                                    <li ><a href="contact.php"><span>Contact</span></a>
                                        
                                      	
                                        
                                        </li>
                                        
                                        
                                     <li><?php if(!isset($_SESSION['_SESS_USERID'])) { ?> <a href="jobseeker-login.php"><span>Jobseeker Login</span></a> &nbsp;<li></span> <a href="employer-login.php"><span>Employer Login</span></a></li> <?php } else { ?><a href="#"><span><?php echo $_SESSION['_SESS_USERNAME']; ?></span></a>&nbsp;<li style="marign-right:9px; margin-top:9px; padding-left:4px;"><a href="logout.php">Logout</a></li><?php } ?></li>
                                      
                                       
                                        
                                        
                                          
                                  
                                  
                                </ul>
                            </nav>	
    
                        </div><!-- end .span9 -->
                    </div><!-- end .row -->		
				</div><!-- end .container -->
			
            <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

			</div><!-- end #header -->
		</div><!-- end #header-wrap -->	

	
	<?php /*?><?php 
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
?><?php */?>
<?php /*?><script language="javascript">
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
	f.action='loginpage/usrlog_loginchk.php';
	f.method='post';
	f.submit();
	return true;
}
</script>	
<?php */?>		
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
    <p style="color:#666666; font-size:15px; line-height:1em;">
   <!-- If you are someone looking for that ideal thrust for your career, you are at the right place!!!</p>
    <p style="color:#666666; font-size:15px; line-height:1em; padding-bottom:3em;" ><a href="openings.php" style="color:#fff;">Click here</a> to view the current openings</p>-->
     
     
            <form name="form_F" method="post" action="loginpage/usrlog_loginchkjobskrlog.php" onSubmit="javascript: return valid();" enctype="multipart/form-data">
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
                    <table>
                    
                <tr>
                    <td><p>Email <span>*</span></p></td>
                    <td>
                    
                       <input class="span12" type="text" name="userLogin_f"  id="userLogin_f" > 
                   </td>
                    </tr>
               
                    <tr>
                    <td><p>Password <span>*</span></p></td>
                    <td>
                        <input class="span12" type="password" name="passwd_f"  id="passwd_f">
                    </td>
                    </tr>
                    
                    
                    <tr><td></td><td style="padding-top:2em;">
                    <p class="last">
                        <input id="submit" class="btn btn-primary" type="submit" name="submit" value="Submit" >
                        
                       
                    </p></td></tr>
                    
                      
                  
                    
                    </table>
                </fieldset>
            </form>
                  
              </div>
              
              <tr>
              <td> Not Registered? Register now and get the job of your choice
              <a href="jobseekersingup.php"><input id="submit" class="btn btn-primary" type="submit" name="submit" value="Signup" style="margin-bottom:2px;" ></a>
              </td></tr>
              
    </div>
    </div>
    
    </div>

</div>
</div>
</div><!--end .main-->
</div>



    
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

<script>
function valid(){
	var f = document.form_F;
	/* var letter = /^[A-Za-z. ]+$/;
	if(f.name_f.value == ''){
		alert("Please Enter Name");
		f.name_f.focus();
		return false;
	}
	
	
	else if(!letter.test(f.name_f.value))
	 	  {
 	      alert("Please Enter only Alphabates");
 	      f.name_f.focus();
  	      return false;
 	      }*/
		  
	if(f.userLogin_f.value == ''){
		alert("Please Enter email id");
		f.userLogin_f.focus();
		return false;
	}
	 /*var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		  if(!filter.test(f.email_f.value)){
		  alert("Please enter the valid email");
		  f.email_f.focus();
		  return false;		
		  }*/
		  
		  
		  
		if(f.passwd_f.value == ''){
		alert("Please Enter Password");
		f.passwd_f.focus();
		return false;
	}  
	
	return true;
}
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