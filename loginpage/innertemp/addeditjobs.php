<script src="ua.js"></script>
<script src="ftiens4.js"></script>
<script type="text/javascript" src="tiny_mce/tiny_mce.js"></script>
//<script type="text/javascript">
//	tinyMCE.init({
//		// General options
//		mode : "textareas",
//		theme : "advanced",
//		skin : "o2k7",
//		skin_variant : "silver",
//		plugins : "safari,style,table,advhr,advimage,advlink,inlinepopups,insertdatetime,preview,media,searchreplace,print,paste,fullscreen,indicime,aksharspellchecker",
//
//		// Theme options
//		theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,formatselect,fontsizeselect,fontselect,aksharspellchecker,indicime,indicimehelp",
//		theme_advanced_buttons2 : "selectall,cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blocationkquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
//		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,media,advhr,|,print",
//		theme_advanced_toolbar_locationation : "top",
//		theme_advanced_toolbar_align : "left",
//		theme_advanced_statusbar_locationation : "bottom",
//		theme_advanced_resizing : true,
//		spellchecker_rpc_url:"http://service.vishalon.net/spellchecker.aspx",
//		// Example content CSS (should be your site CSS)
//		content_css : "css/content.css",
//
//		// Drop lists for link/image/media/template dialogs
//		template_external_list_url : "lists/template_list.js",
//		external_link_list_url : "lists/link_list.js",
//		external_image_list_url : "lists/image_list.js",
//		media_external_list_url : "lists/media_list.js",
//		width : "100%"
//	});
//		function CheckNewVersion()
//		{
//			var JSONRequest = tinymce.util.JSONRequest;
//			try {
//				netscape.security.PrivilegeManager.enablePrivilege("UniversalBrowserRead");
//			} catch (e) {
//		// do nothing
//			}
//			JSONRequest.sendRPC({
//					url : "http://service.vishalon.net/pramukhtypepadmessage.aspx?v=2.0.00",
//					method : "",
//					params : "",
//					type: "GET",
//					success : function(r){
//						var message = r.substring(r.indexOf(",")+1);
//						if (message != "")
//							document.getElementById("message").innerHTML = "<img src='img/info.jpg' >" + message + "<br><br>";
//						},
//						error : function(e, x) {
//							// do nothing 
//						}
//					});
//		}
//
//		var pph;
//		function toggle_menu()
//		{
//			var elem = document.getElementById('submenu');
//			elem.style.display = elem.style.display=="none"? "":"none";
//		}
//		function indicChange(id, lang)
//		{
//			var s = document.getElementById('language');
//			s.value = lang;
//			if (lang == null || lang == "")
//				lang = 'english';
//			pph.setScript(id, lang);
//		}
//		
//		function bodyonload()
//		{
//			toggle_menu();
//			document.getElementById('warning').innerHTML='';
//			pph = new PramukhPhoneticHandler();
//			pph.convertToIndicIME("q");
//			pph.onScriptChange("q", indicChange);
//			CheckNewVersion();
//		}
//		</script>

<script>
function valid(){
	var f = document.package_F;
	if(f.jobname_f.value == ''){
		alert("Please Enter Job Title");
		f.jobname_f.focus();
		return false;
	}
	
		if(f.compName_f.value == ''){
		alert("Please Enter Company Name ");
		f.compName_f.focus();
		return false;
	}
	
	

	/*if(f.location_f.value == ''){
		alert("Please Enter Location");
		f.location_f.focus();
		return false;
	}*/
	
if(f.qualfctn_f.value == ''){
		alert("Please Enter Qualification");
		f.qualfctn_f.focus();
		return false;
	}

	if(f.experience_f.value == ''){
		alert("Please Enter Experience");
		f.experience_f.focus();
		return false;
	}
	return true;
}
</script>
<div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">
								<!-- Page Heading Start -->
				<div class="page-heading">
            		<h1><i class='fa fa-table'></i> Openings Details</h1> 
            		           	</div>
            	<!-- Page Heading End-->				<!-- Your awesome content goes here -->
				
                <div class="col-md-12 portlets ui-sortable">
                                
                <div class="widget">
                
                <div class="widget-header transparent">
                <h2><strong>Add New</strong> Openings</h2>
                <div class="additional-btn">
<a class="hidden reload" href="#">
<i class="icon-ccw-1"></i>
</a>
<a class="widget-toggle" href="#">

<i class="icon-down-open-2"></i>
</a>
</div></div>

<div class="widget-content padding">
<form action="" method="post" name="package_F" role="form" onSubmit="return valid();" enctype="multipart/form-data">
<input type="hidden" name="id_f" id="id_f" value="<?php if(!empty($_REQUEST['id'])){ echo $id; }  ?>" />
<table width="100%" border="0">
	      <tr>
            <td colspan="2" align="center"><?php if(isset($_REQUEST['msg'])){ if($_REQUEST['msg'] == 'Inserted'){ echo "Successfully Inserted"; } else if($_REQUEST['msg'] == 'Updated') { echo "Successfully Updated"; } else { echo ""; } }?></td>
        </tr>
    <tr>
        <td width="6%">&nbsp;</td>
        <td width="17%"><p>&nbsp;</p>
          <p><strong> Job Title:</strong><span style="color:#F00; font-weight:100">*</span></p></td>
        <td width="77%" ><input class="input2" type='text' name='jobname_f' id='jobname_f' 
        value="<?php if(!empty($id )) { echo $jobTitle; } ?>"/></td>
        <td width="0%">&nbsp;</td>
    </tr>
    
   
   <tr>
        <td width="6%">&nbsp;</td>
        <td width="17%"><strong>Company Name:</strong><span style="color:#F00; font-weight:100">*</span></td>
        <td width="77%" ><input class="input2" type='text' name='compName_f' id='compName_f' 
        value="<?php if(!empty($id )) { echo $compName; } ?>"/></td>
        <td width="0%">&nbsp;</td>
    </tr>
    
     <tr>
    <td colspan="4">&nbsp;</td>
    </tr>
    
<?php /*?>      <tr>
        <td width="6%">&nbsp;</td>
        <td width="17%"><strong>Location:</strong><span style="color:#F00; font-weight:100">*</span></td>
        <td width="77%" ><input class="input2" type='text' name='location_f' id='location_f' 
        value="<?php if(!empty($id )) { echo $location; } ?>"/></td>
        <td width="0%">&nbsp;</td>
    </tr>
<?php */?>    
     <tr>
        <td width="6%">&nbsp;</td>
        <td width="17%"><strong>Qualification:</strong><span style="color:#F00; font-weight:100">*</span></td>
        <td width="77%" ><input class="input2" type='text' name='qualfctn_f' id='qualfctn_f' 
        value="<?php if(!empty($id )) { echo $qualfctn; } ?>"/></td>
        <td width="0%">&nbsp;</td>
    </tr>
    
     <tr>
    <td colspan="4">&nbsp;</td>
    </tr>
    
      <tr>
        <td width="6%">&nbsp;</td>
        <td width="17%"><strong>Experience:</strong><span style="color:#F00; font-weight:100">*</span></td>
        <td width="77%" ><input type='text' name='experience_f' id='experience_f' value="<?php if (!empty($id)) { echo $experience; } ?>"></td>
        <td width="0%">&nbsp;</td>
    </tr>
    
     <tr>
    <td colspan="4">&nbsp;</td>
    </tr>
    
   <tr>
        <td>&nbsp;</td>
        <td><strong>Status:</strong></td>
        <td >
        <select class="selcetee" name='status_f' id='status_f'>

          <option value="E" <?php if(!empty($id)){ if($jobStatus == 'E') { echo "selected='selected'"; } } ?>>Enable</option>

          <option value="D" <?php if(!empty($id)){ if($jobStatus == 'D') { echo "selected='selected'"; } } ?>>Disable</option>

        </select>
      </td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>
        <tr>
          <td>&nbsp;</td>
          <td class="style2" colspan="2"><input class="btn btn-blue-3" type="submit" value="Submit" name="submit" onClick="">&nbsp;<input class="btn btn-red-1" name="cancel" type="button"  value="Cancel" onClick="javscript: locationation.href='<?php if(!empty($id)) { echo "vieweditjob.php"; } else { echo "adminhome.php"; }?>'" /></td>
        </tr>
</table>
</form>

</div>
</div>
                </div>
                
                
                

				
				
		
            </div>