<?php include("header2.php");
include_once("loginpage/includes/application.php");
include_once("loginpage/includes/class.CommonFunc.php");
?>
<?php /*?><script language="javascript">
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
print "if(document.form_F.course_f.value == '".$rs['courseID']."')";
print "{";
$sub=$db->query("SELECT * FROM subcourse_m_t WHERE courseID='".$rs['subcourseID']."' and subcourseStatus = 'E'");
$totsub = $db->numRows($sub);
if($totsub > 0) {
	while($subsql=$db->fetchArray($sub))
	{
		print "addOption(document.form_F.subcourse_f,'".$subsql['subcourseID']."', '".addslashes($subsql['subcourseName'])."');";
	}
} else {
		print "addOption(document.form_F.subcategory_f,'0', 'None');";	
}
print "}";
}
?> 
}
</script><?php */?>
<!-- /// CONTENT  /////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<div class="span12" style="width:100%; padding:0;" >
  <div class="headline"> <img src="assets/images/enquiry.jpg" /> </div>
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
          <img src="assets/images/best_practices.jpg" /> </div>
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
                      <td></td>
                      <td><?php /*?><input class="span12" type="text" name="cname_f"  id="cname_f" value="<?php echo $id1;?>"><?php */?>
                       <?php if($_SESSION['_SESS_USERROLE'] == 2){ ?>
                       
                        <input class="span12" type="hidden" name="cname_f"  id="cname_f" value="<?php echo $id1;?>" readonly="readonly">
                        
                        <?php } else { ?>
                        
                         <input class="span12" type="hidden" name="cname_f"  id="cname_f" value="<?php echo getcname($id1);?>" readonly="readonly">
                        
                        <?php } ?>
                      </td>
                    </tr>
                   <?php /*?> <tr>
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
                      <td><input class="span12" type="text" name="branch_f" id="branch_f" value="<?php echo getubrnch($id1); ?>"  onChange="SelectSubCategory(this.value)" >
                      
                        <input type="text" name="sub-branch_f" id="sub-branch_f" value="<?php echo getsubbranch($id1); ?>">
                    
                        </select>
                      </td>
                    </tr><?php */?>
                    <td><p>Attach Resume</p></td>
                  <?php  
                /*    if(!empty($_REQUEST['id'])) {
	$id 			  = base64_decode($_REQUEST['id']);*/
	
	$searchqry 	   = $db->query("select uploadImgPath
							
										from upload_t
							 			where user_id = '".$id1."'");
	$searchfetch 	 = $db->fetchArray($searchqry);
	
	$usrimagepath 	   = $searchfetch['uploadImgPath'];
	?>
                      <td>
<?php /*?>                      <input class="span12" type="file" id="photo" name="photo" value="" placeholder="Upload Resume" value="<?php echo getuemail($id1); ?>" >
<?php */?>                   

   <input type="file" name="photo" id="photo"/>
     <?php if($_SESSION['_SESS_USERROLE'] == 2){ ?>
     
   <?php } else { ?>
      <?php if(!empty($usrimagepath)){ ?><a href="loginpage/<?php echo $usrimagepath; ?>" target="_blank"><span><strong class="btn btn-primary">View</strong></a><?php } ?>
<?php } ?>
   <input type="hidden" name="prvimagepath_f" id="prvimagepath_f" value="<?php if(!empty($usrimagepath)){ echo $usrimagepath; } ?>" />
   
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
<?php include("footer.php")?>
