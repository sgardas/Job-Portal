<?php /*?><?php include("../header2.php");  ?><?php */?>

<script language="javascript">
function removeAllOptions(selectbox)
{
	var i;
	for(i=selectbox.options.length-1;i>=0;i--)
	{
		//selectbox.options.remove(i);
		selectbox.remove(i);
	}
}
function start() { 
	if (window.ActiveXObject) {
		objXmlHTTP = new ActiveXObject("Microsoft.XMLHTTP") ;  
	}
	else if (window.XMLHttpRequest) {
		objXmlHTTP = new XMLHttpRequest();
	}
} //end of function start
function addOption(selectbox, value, text )
{
	var optn = document.createElement("OPTION");
	optn.text = text;
	optn.value = value;
	selectbox.options.add(optn);
}

function SelectSubCategory(val)
{
//	alert(val);
// ON selection of category this function will work
removeAllOptions(document.form_F.subcategory_f);
//addOption(document.form_F.detcat_f, "0", ".........NONE.........", "");
	<?php
$sql= $db->query("SELECT * FROM course_m_t where courseStatus = 'E'");
while($rs=$db->fetchArray($sql))
{
print "if(document.form_F.category_f.value == '".$rs['courseID']."')";
print "{";
$sub=$db->query("SELECT * FROM subcourse_m_t WHERE courseID='".$rs['courseID']."' and subcourseStatus = 'E'");
$totsub = $db->numRows($sub);
if($totsub > 0) {
	while($subsql=$db->fetchArray($sub))
	{
		print "addOption(document.form_F.subcategory_f,'".$subsql['subCatID']."', '".addslashes($subsql['subCatName'])."');";
	}
} else {
		print "addOption(document.form_F.subcategory_f,'0', 'None');";	
}
print "}";
}
?> 
}
</script>
<script src="ua.js"></script>
<script src="ftiens4.js"></script>
<script type="text/javascript" src="tiny_mce/tiny_mce.js"></script>


<?php /*?><script src="ua.js"></script>
<script src="ftiens4.js"></script>
<script type="text/javascript" src="tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		skin : "o2k7",
		skin_variant : "silver",
		plugins : "safari,style,table,advhr,advimage,advlink,inlinepopups,insertdatetime,preview,media,searchreplace,print,paste,fullscreen,indicime,aksharspellchecker",

		// Theme options
		theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,formatselect,fontsizeselect,fontselect,aksharspellchecker,indicime,indicimehelp",
		theme_advanced_buttons2 : "selectall,cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,media,advhr,|,print",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,
		spellchecker_rpc_url:"http://service.vishalon.net/spellchecker.aspx",
		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",
		width : "100%"
	});
		function CheckNewVersion()
		{
			var JSONRequest = tinymce.util.JSONRequest;
			try {
				netscape.security.PrivilegeManager.enablePrivilege("UniversalBrowserRead");
			} catch (e) {
		// do nothing
			}
			JSONRequest.sendRPC({
					url : "http://service.vishalon.net/pramukhtypepadmessage.aspx?v=2.0.00",
					method : "",
					params : "",
					type: "GET",
					success : function(r){
						var message = r.substring(r.indexOf(",")+1);
						if (message != "")
							document.getElementById("message").innerHTML = "<img src='img/info.jpg' >" + message + "<br><br>";
						},
						error : function(e, x) {
							// do nothing 
						}
					});
		}

		var pph;
		function toggle_menu()
		{
			var elem = document.getElementById('submenu');
			elem.style.display = elem.style.display=="none"? "":"none";
		}
		function indicChange(id, lang)
		{
			var s = document.getElementById('language');
			s.value = lang;
			if (lang == null || lang == "")
				lang = 'english';
			pph.setScript(id, lang);
		}
		
		function bodyonload()
		{
			toggle_menu();
			document.getElementById('warning').innerHTML='';
			pph = new PramukhPhoneticHandler();
			pph.convertToIndicIME("q");
			pph.onScriptChange("q", indicChange);
			CheckNewVersion();
		}
		</script>
        <?php */?>








<SCRIPT type=text/JavaScript>
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
function popup(mylink, windowname)
{
if (! window.focus)return true;
var href;
if (typeof(mylink) == 'string')
   href=mylink;
else
   href=mylink.href;
window.open(href, windowname, 'width=900,height=300,scrollbars=yes');
return false;
}

</SCRIPT>

<!--header-->
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    
	<title>Job Poartal</title>
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
	<link rel="stylesheet" href="../assets/fonts/fontawesome/font-awesome.min.css">
    
    <!-- /// Custom Icon Font ////////  -->
    <link rel="stylesheet" href="../assets/fonts/iconfontcustom/icon-font-custom.css">  
    
	<!-- /// Plugins CSS ////////  -->
	<link rel="stylesheet" href="../assets/vendors/revolutionslider/css/settings.css">
    <link rel="stylesheet" href="../assets/vendors/bxslider/jquery.bxslider.css">
	<link rel="stylesheet" href="../assets/vendors/magnificpopup/magnific-popup.css">
    <link rel="stylesheet" href="../assets/vendors/animations/animate.min.css">
	<link rel="stylesheet" href="../assets/vendors/itplayer/css/YTPlayer.css">
	
	<!-- /// Template CSS ////////  -->
	<link rel="stylesheet" href="../assets/css/reset.css">
	<link rel="stylesheet" href="../assets/css/grid.css">
	<link rel="stylesheet" href="../assets/css/elements.css">
	<link rel="stylesheet" href="../assets/css/layout.css">
	<link rel="stylesheet" href="../assets/css/components.css">
	<link rel="stylesheet" href="../assets/css/wordpress.css">
    
	<!-- /// Boxed layout ////////  -->
    
    <link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="../assets/css/default.css" />
       
        <link rel="stylesheet" type="text/css" href="../assets/css/main-style.css" />
		<link rel="stylesheet" type="text/css" href="../assets/css/component.css" />
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
<body>
	
    
    
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
                                <a href="../index.php">
                               <!-- <h1 style="font-size:45px; text-transform:uppercase; padding-top:0.8em;">Job Sketch</h1>-->
                                    <img src="../assets/images/logo.jpg" alt="website logo"  style="vertical-align:bottom; width:65px;">
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

<!--header-->


<!-- /// CONTENT  /////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<div class="span12" style="width:100%; padding:0;" >
  <div class="headline"> <img src="../assets/images/enquiry.jpg" /> </div>
  <!-- end .headline -->
</div>
<!-- end #page-header -->
<div class="content" style="background-color:burlywood;">
  <div class="container">
    <!-- end .spsn12 -->
    <div class="row"  >
      <div class="span12" >
        <div class="span3">
          <p style="background-color:#f9b125; padding:10px; color:#FFF; font-size:12px;">As a best practice company, we realize that the little things make the most difference. </p>
          <img src="../assets/images/best_practices.jpg" /> </div>
        <!-- end .span3 -->
        <div class="span9" style="padding-top:0em;">
          <div class="span12" >
            <div class="wrap">
              <div class="main">
                <p style="padding:0.2em 0.5em; color:#666666; font-size:20px; ">Welcome to &nbsp;<span style="font-size:28px; color:#000000; font-weight:600;" >Job</span><span style="font-size:28px;color:#f49521;font-weight:600;" >Poartal</span></p>
                <form name="form_F" method="post" action="loginpage/jobseekerdata.php" onSubmit="javascript: return valid();" enctype="multipart/form-data">
                  <input type="hidden" name="id_f" id="id_f" value="<?php if(!empty($_REQUEST['id'])){ echo $id; }  ?>" />
                  <input type="hidden" name="id1_f" id="id1_f" value="<?php $id1 = $_REQUEST['click_id']; ?>" />
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
                      <td><p>Company Name <span>*</span></p></td>
                      <td><?php /*?><input class="span12" type="text" name="cname_f"  id="cname_f" value="<?php echo $id1;?>"><?php */?>
                        <input class="span12" type="text" name="cname_f"  id="cname_f" value="<?php echo $id1;?>">
                      </td>
                    </tr>
                    
                    <tr>
                      <td><p>Full Name <span>*</span></p></td>
                      <td><input class="span12" type="text" name="fname_f"  id="fname_f" value="<?php echo getuname($id1); ?>">
                      </td>
                    </tr>
                    <tr>
                      <td><p>Email ID <span>*</span></p></td>
                      <td><input class="span12" type="text" name="email_f"  id="email_f" value="<?php echo getuemail($id1); ?>">
                      </td>
                    </tr>
                    <tr>
                      <td><p>Password <span>*</span></p></td>
                      <td><input class="span12" type="password" name="password_f"  id="password_f" value="<?php echo getupass($id1); ?>">
                      </td>
                    </tr>
                    <tr>
                      <td><p>Mobile Number <span>*</span></p></td>
                      <td><input class="span12" type="text" name="mobile_f"  id="mobile_f" value="<?php echo getumbl($id1); ?>">
                      </td>
                    </tr>
                    <tr>
                      <td><p>Address <span>*</span></p></td>
                      <td><input class="span12" type="text" name="addrs_f"  id="addrs_f" value="<?php echo getuadrs($id1); ?>">
                      </td>
                    </tr>
                    <tr>
                      <td><p>Which year</p></td>
                      <td><input class="span12" type="text" id="year_f" name="year_f" value="<?php echo getuyr($id1); ?>">
                      </td>
                    </tr>
                    <tr>
                      <td><p>Total GPA</p></td>
                      <td><input class="span12" type="text" name="gpa_f" id="gpa_f" value="<?php echo getugpa($id1); ?>" >
                      </td>
                    </tr>
                    <tr>
                      <td><p>Branch</p></td>
                      <td>
<?php /*?>                      <input class="span12" type="text" name="branch_f" id="branch_f" value="<?php echo getubrnch($id1); ?>"  onChange="SelectSubCategory(this.value)" >
<?php */?>                      
                       <select class="select2" name="category_f" id="category_f" onChange="SelectSubCategory(this.value)">  
        <option value="">Select</option>  
                           <?php
					
													 //$courseID = '';

                $tophdrqry1 = $db->query("select courseID , courseName from course_m_t
                                     where courseStatus = 'E'");
                while($data1 = $db->fetchArray($tophdrqry1))
                {
                if($data1['courseID']==$courseID) { $selected = "selected"; } else { $selected = ""; }
                print "<option value='$data1[courseID]'$selected>$data1[courseName]</option>";
                } ?>
                    </select>
                      </td>
                      </tr>
					
                      
                	 <tr>
                      <td><p>Sub-Branch</p></td>
                       <td> <select class="span12" name="subcategory_f" id="subcategory_f">
                       <option value="">Select</option>
                         <?php
						// $subcourseID = '';
                $tophdrqry1 = $db->query("select subcourseID , subcourseName from subcourse_m_t
                                     where subcourseStatus = 'E'");
                while($data1 = $db->fetchArray($tophdrqry1))
                {
                if($data1['subcourseID']==$subcourseID) { $selected = "selected"; } else { $selected = ""; }
                print "<option value='$data1[subcourseID]'$selected>$data1[subcourseName]</option>";
                } ?>
                        </select>
                      </td>
                    </tr>
                  
                    <td><p>Attach Resume</p></td>
                      <td><input class="span12" type="file" id="photo" name="photo" value="" placeholder="Upload Resume"  value="<?php echo getuemail($id1); ?>">
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td style="padding-top:2em;"><p class="last">
                          <input id="submit" class="btn btn-primary" type="submit" name="submit" value="Submit" >
                        </p></td>
                    </tr>
                  </table>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--end .main-->
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
	 var letter = /^[A-Za-z. ]+$/;
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
<?php include("../footer.php")?>
<script language="javascript">
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
function valid1(){
	var sa = /^[A-Za-z. ]+$/;
	var f = document.states_F;
	if(Trim(f.name_f.value) == ''){
		alert("Please enter the  State Name");
		f.name_f.focus();
		return false;		
	}
	if(Trim(f.status_f.value) == ''){
		alert("Please select the status");
		f.status_f.focus();
		return false;		
	}
			return true;
}
function addRow(tblId)
{
	var tbl = document.getElementById(tblId);
	var lastRow = tbl.rows.length;
	
	var iteration = lastRow + 1;
	var row = tbl.insertRow(lastRow);
	
	// cell 1
	if(lastRow >= 6){
		alert("Sorry, Maximum upload limit is 6 images");
		return false;
	}
	var cell_1 = row.insertCell(0);
	var textNode = document.createTextNode(iteration);
	cell_1.appendChild(textNode);
	cell_1.className='bodytext';
	cell_1.align='center';

	// cell 2
	var cell_2 = row.insertCell(1);
	cell_2.innerHTML = "<input type='file' name='upfiles[]' id='upfiles' class='input' size='25'>";
	cell_2.align='left';   
		
	} //end of function addRow

function deleteLastRow(tblId)
{
	var tbl = document.getElementById(tblId);
	if (tbl.rows.length >1) 
	tbl.deleteRow(tbl.rows.length - 1); 
	else 
	alert("This Row Cannot be Deleted.");
} //end of function deleteLastRow
			
</script>