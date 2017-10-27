<?php
	$fi=$_SERVER['SCRIPT_NAME'];
	if(!empty($fi))
	{
		$file=trim(substr(strrchr($fi, "/"), 1));
	}
	switch ($file) 
	{
		case "addnewproduct.php":
		$body= '<body onLoad="subcatdet('.$categoryID.')">';
		break;
		default:
		$body= '<body>';		
	}
print $body;			 
?>
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
<script src="ua.js"></script>
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
<style type="text/css">
#submenu {
	font-size: 14px;
}
/*a, a:link, a:visited, a:active, a:hover { color:blue; }*/
#message {
	color: #CC0000;
	font-size: 14px;
}
hr {
	border: 1px solid #FF9900;
}
.title {
	font-size: 24px;
	color: #666699;
	font-weight: bold;
}
</style>
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

function start() { 
	if (window.ActiveXObject) {
		objXmlHTTP = new ActiveXObject("Microsoft.XMLHTTP");  
	}
	else if (window.XMLHttpRequest) {
		objXmlHTTP = new XMLHttpRequest();
	}
} //end of function start

function removeAllOptions(selectbox)
{
	var i;
	for(i=selectbox.options.length-1;i>=0;i--)
	{
		//selectbox.options.remove(i);
		selectbox.remove(i);
	}
} //end of function removeAllOptions

function addOption(selectbox, value, text )
{
	var optn = document.createElement("OPTION");
	optn.text = text;
	optn.value = value;

	selectbox.options.add(optn);
} //end of function addOption

function valid()
{
	  var f= document.chngpwd_F;
	  if(f.oPass.value=="")
	   {
		   alert("Please Enter Old Password");
		   f.oPass.focus();
		   return false;
	   } 
	if (document.getElementById('oPass').value.indexOf("'") != -1 || document.getElementById('oPass').value.indexOf("`") != -1) {
		alert("Password are not Allowed for these Characters ' (Single Quotes) and ` (Tilt)");
		f.oPass.focus();
		return false;
	}
	 if(f.nPass.value=="")
	  {
		  alert("Please Enter New Password");
		  f.nPass.focus();
		  return false;
	  }
	if (document.getElementById('nPass').value.indexOf("'") != -1 || document.getElementById('nPass').value.indexOf("`") != -1) {
		alert("Password are not Allowed for these Characters ' (Single Quotes) and ` (Tilt)");
		f.nPass.focus();
		return false;
	}
	 if(f.nPass.value.length<5)
	   {
		  alert("Password Length should be minimum 5 Charecters ");
		  f.nPass.focus();
		  return false;
	   }	
	 if(f.cPass.value=="")
	 {
		 alert("Please Enter Confirm Password");
		 f.cPass.focus();
		 return false;
	 }
	if (document.getElementById('cPass').value.indexOf("'") != -1 || document.getElementById('cPass').value.indexOf("`") != -1) {
		alert("Password are not Allowed for these Characters ' (Single Quotes) and ` (Tilt)");
		f.cPass.focus();
		return false;
	}
	if(f.nPass.value != f.cPass.value)
	 {
		alert("New Password and Confirm Password Mismatch");
		f.cPass.focus();
		return false;
	 }
	if(f.nPass.value == f.oPass.value)
	 {
		alert("The Password has been expired and give the new password to continue login \n (The New Password is valid for 5 days)");
		f.nPass.value="";
		f.cPass.value="";
		f.cPass.focus();
		return false;
	 }    
	 return true;  
}

function count1(str)
{
	var str1=str.value.length;
	if(str1>=255)
	{
		alert("Maximum 255 characters");
		str.value=str.value.substring(0,254);
		return(str);
	}
}
</script>


<div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">
								<!-- Page Heading Start -->
				<div class="page-heading">
            		<h1><i class='fa fa-table'></i> Password</h1> 
            		           	</div>
            	<!-- Page Heading End-->				<!-- Your awesome content goes here -->
				
                <div class="col-sm-12 portlets ui-sortable">
                                
                

<div class="row">
<div class="col-md-12">
      <div class="widget">
                
                <div class="widget-header transparent">
                <h2><strong>Change</strong> Password</h2>
                <div class="additional-btn">
<a class="hidden reload" href="#">
<i class="icon-ccw-1"></i>
</a>
<a class="widget-toggle" href="#">
<i class="icon-down-open-2"></i>
</a>
</div></div>

<div class="widget-content padding">
<form action="" method="post" name="chngpwd_F" role="form"  onsubmit="return valid();">
<input type="hidden" name="id_f" id="id_f" value="<?php if(!empty($id)) { echo $id; } ?>" />
<table align="center" width="90%" border="0" class="bodytext">
	<tr><td>&nbsp;</td></tr>
<!--<tr>
    <td align="left" colspan="3" class="barheading">&nbsp;<strong>Change Password</strong></td>
</tr> -->
<!--	<tr><td align="left" class="label1"><strong>Change Password</strong></td></tr>
-->	<tr><td align="center" class="redtext"><strong><?php if(!empty($_REQUEST['msg'])) {print $_REQUEST['msg'];}?></strong></td></tr>
	<tr><td>&nbsp;</td></tr>
<tr><td>
<table align="center" width="100%" border="0" class="bodytext">
      <tr>
	    <td width="20%"  align="left" class="style2"><strong>Old Password</strong> <span style="color:#F00; font-weight:100">*</span></td>
        <td width="80%" align="left" class="style2"><input type="password" name="oPass" id="oPass" class="inputselect" maxlength="12" value=""></td></tr>
        
        <tr>
    <td colspan="4">&nbsp;</td>
    </tr>
    
      <tr>
		 <td class="style2" align="left"><strong>New Password</strong> <span style="color:#F00; font-weight:100">*</span></td>
         <td class="style2" align="left"><input type="password" name="nPass" id="nPass" class="inputselect" maxlength="12">&nbsp;<span class="redtext">
	          (Min. Length 5 - Max. Length 12)</span>
			</td></tr>
            
            <tr>
    <td colspan="4">&nbsp;</td>
    </tr>
    
	<tr>
      <td class="style2" align="left"><strong>Confirm Password</strong> <span style="color:#F00; font-weight:100">*</span></td>
      <td class="style2" align="left"><input type="password" name="cPass" id="cPass" class="inputselect" maxlength="12">&nbsp;<span class="redtext">
	      (Min. Length 5 - Max. Length 12)</span>
		</td></tr>
        
        <tr>
    <td colspan="4">&nbsp;</td>
    </tr>
    
<tr>
	<td>&nbsp;</td>
    </tr>
<tr>
	<td>&nbsp;</td>
    <td class="style2"><input class="btn btn-blue-3" type="submit" value="Submit" name="submit" onclick="">&nbsp;<input class="btn btn-red-1" name="cancel" type="button"  value="Cancel" onclick="javscript: location.href='<?php if(!empty($id)) { echo "vieweditproduct.php"; } else { echo "home.php"; }?>'" /></td>
    </tr>
</table>
</td></tr>
</table>
</form>

</div>
</div>              
</div>
</div>

                </div>
                
                
             

				
				
				
				            <!-- Footer Start -->
       <div class="clear"></div>     
      
<?php include("includes/footer.php") ?>

          <!-- Footer End -->			
            </div>