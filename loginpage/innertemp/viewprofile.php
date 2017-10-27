<script src="ua.js"></script>
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

function valid(){
	var f = document.profile_F;
	if(f.userfname_f.value == ''){
		alert("Please Enter Name");
		f.userfname_f.focus();
		return false;
	}
	if(f.imagepath_f.value == '' && f.prvimagepath_f.value == '' ){
		alert("Please Upload Image");
		f.imagepath_f.focus();
		return false;
	}
	if(f.dob_f.value == ''){
		alert("Please Select Date of Birth");
		f.dob_f.focus();
		return false;
	}
	
	if(f.gender_f.value == ''){
		alert("Please Select Gender");
		f.gender_f.focus();
		return false;
	}
	
	if(f.address_f.value == ''){
		alert("Please Enter Address");
		f.address_f.focus();
		return false;
	}
	
	if(f.mobileno_f.value == ''){
		alert("Please Enter Mobile Number");
		f.mobileno_f.focus();
		return false;
	}
	
	var val = f.mobileno_f.value
          if (/^\d{10}$/.test(val)) {
          // value is ok, use it
          } else {
          alert("Invalid number; must be ten digits")
          f. mobileno_f.focus();
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

<div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">
								<!-- Page Heading Start -->
				<div class="page-heading">
            		<h1><i class='fa fa-table'></i> View Profile</h1> 
            		           	</div>
            	<!-- Page Heading End-->				<!-- Your awesome content goes here -->
				
                <div class="col-sm-12 portlets ui-sortable">
                                
                

<div class="row">
<div class="col-md-12">
      <div class="widget">
                
                <div class="widget-header transparent">
                <h2><strong>Add New </strong> Profile</h2>
                <div class="additional-btn">
<a class="hidden reload" href="#">
<i class="icon-ccw-1"></i>
</a>
<a class="widget-toggle" href="#">
<i class="icon-down-open-2"></i>
</a>
</div></div>

<div class="widget-content padding">
<form action="" method="post" name="profile_F" role="form"  onsubmit="return valid();" enctype="multipart/form-data">
<input type="hidden" name="id_f" id="id_f" value="<?php if(!empty($id)) { echo $id; } ?>" />
<table width="100%" border="0">
    <tr>
        <td width="6%">&nbsp;</td>
        <td width="17%"><strong>Name:<span>*</span></strong></td>
        <td width="77%" ><input class="inputselect" type='text' name='userfname_f' id='userfname_f' maxlength="1000" 
        value="<?php if(!empty($id )) { echo $firstName; } ?>" placeholder="First Name"/>&nbsp;<input class="inputselect" type='text' name='usersname_f' id='usersname_f' maxlength="1000" value="<?php if(!empty($id )) { echo $secondName; } ?>" placeholder="Last Name"/></td>
        <td width="0%">&nbsp;</td>
    </tr>
    
  
      <tr>
    <td colspan="4">&nbsp;</td>
    </tr>
    
    <tr>
        <td width="6%">&nbsp;</td>
      <td width="24%" align="left" class="border1"><strong>Upload Image<span>*</span></strong></td>
      <td width="76%" align="left"><input type="file" name="imagepath_f" id="imagepath_f"/><?php if(!empty($usrimagepath)){ ?><a href="<?php echo $usrimagepath; ?>" target="_blank">View</a><?php } ?><input type="hidden" name="prvimagepath_f" id="prvimagepath_f" value="<?php if(!empty($usrimagepath)){ echo $usrimagepath; } ?>" /></td>
    </tr>
    
      <tr>
    <td colspan="4">&nbsp;</td>
    </tr>
    
    
    <tr>
        <td width="6%">&nbsp;</td>
        <td width="17%"><strong>Date of Birth:<span>*</span></strong></td>
        <td width="77%" ><input id="udob_f" class="" type="Text" readonly="" maxlength="1000" name="dob_f" value="<?php if(!empty($id )) { echo getDateFormat($dob); } ?>">&nbsp;<img style="cursor:pointer" onclick="javascript:NewCssCal('udob_f')" src="images2/cal.gif"></td>
        <td width="0%">&nbsp;</td>
    </tr>
    
      <tr>
    <td colspan="4">&nbsp;</td>
    </tr>
    
    
      <tr>
        <td width="6%">&nbsp;</td>
        <td width="17%"><strong>Gender:<span>*</span></strong></td>
        <td width="77%" >
        <select class="inputselect" name="gender_f" id="gender_f">
        <option value="M" <?php if(!empty($id)) { if($gender == 'M') { echo 'selected="selected"'; } }?> >Male</option>
        <option value="F" <?php if(!empty($id)) { if($gender == 'F') { echo 'selected="selected"'; } }?>>Female</option>
        </select>
        </td>
        <td width="0%">&nbsp;</td>
    </tr>
    
      <tr>
    <td colspan="4">&nbsp;</td>
    </tr>
    
       <tr>
        <td width="6%">&nbsp;</td>
        <td width="17%"><strong>Address:<span>*</span></strong></td>
        <td width="77%" ><input type="text" name='address_f' id='address_f' value="<?php if(!empty($id )) { echo $address; } ?>" ></td>
        <td width="0%">&nbsp;</td>
    </tr>
    
      <tr>
    <td colspan="4">&nbsp;</td>
    </tr>
    
    <tr>
        <td width="6%">&nbsp;</td>
        <td width="17%"><strong>Mobile No.:<span>*</span></strong></td>
        <td width="77%" ><input class="inputselect" type='text' name='mobileno_f' id='mobileno_f' maxlength="10" 
        value="<?php if(!empty($id )) { echo $mobileno; } ?>" placeholder="Mobile No."/></td>
        <td width="0%">&nbsp;</td>
    </tr>
    
      <tr>
    <td colspan="4">&nbsp;</td>
    </tr>
    
    
    <tr>
        <td width="6%">&nbsp;</td>
        <td width="17%"><strong>Email ID:<span>*</span></strong></td>
        <td width="77%" ><input class="inputselect" type='text' name='email_f' id='email_f' maxlength="1000" 
        value="<?php if(!empty($id )) { echo $email; } ?>" placeholder="Emal ID"/></td>
        <td width="0%">&nbsp;</td>
    </tr>
    
      <tr>
    <td colspan="4">&nbsp;</td>
    </tr>
    
    
    <tr>
        <td width="6%">&nbsp;</td>
        <td width="17%"><strong>User ID:</strong></td>
        <td width="77%" style="color:#F00"><strong><?php if(!empty($id )) { echo $userid; } ?></strong></td>
        <td width="0%">&nbsp;</td>
    </tr>
    
      <tr>
    <td colspan="4">&nbsp;</td>
    </tr>
    
    <tr>
         <td width="6%">&nbsp;</td>
		 <td align="left"><strong>Old Password</strong></td>
         <td align="left" style="color:#F00"><strong><?php echo $oldpassword; ?></strong></td>
    </tr>
    
      <tr>
    <td colspan="4">&nbsp;</td>
    </tr>
    
        <tr>
          <td>&nbsp;</td>
          <td class="style2" colspan="2"><input class="btn btn-blue-3" type="submit" value="Submit" name="submit" onclick="">&nbsp;<input class="btn btn-red-1" name="cancel" type="button"  value="Cancel" onclick="javscript: location.href='<?php if(!empty($id)) { echo "adminhome.php"; } else { echo "adminhome.php"; }?>'" /></td>
        </tr>
</table>
</form>

</div>
</div>              
</div>
</div>

                </div>
                

		
            </div>