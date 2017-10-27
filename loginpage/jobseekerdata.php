<script language="javascript" type="text/javascript">

function Msuc_msg()
{
alert("Thanks for register.");
window.open("../openings.php?msg=Registered","_self");
}
function MFail_msg()
{
alert("Message not sent and Query not Updated! Please Try Again Later");
window.open("../jobseekersingup.php?msg=MFail","_self");
}
function Mmandat_msg()
{
alert("Please login to sell your business");
window.open("../employer-signup.php?msg=Mandatory","_self");
}
function MExists_msg()
{
alert("Sorry! Fields are alreadyexist!");
window.open("../jobseekersingup.php?msg=alreadyexist","_self");
}


function admin_msg()
{
//alert("Sorry! Fields are alreadyexist!");
window.open("home.php?msg=success","_self");
}

function jobseeker_msg()
{
//alert("Sorry! Fields are alreadyexist!");
window.open("../openings.php?msg=success","_self");
}

function MExists_msg()
{
alert("Sorry! Fields are alreadyexist!");
window.open("../jobseekersingup.php?msg=alreadyexist","_self");
}

function MExists_msg()
{
alert("Sorry! Fields are alreadyexist!");
window.open("../jobseekersingup.php?msg=alreadyexist","_self");
}

function MExists_msg()
{
alert("Sorry! Fields are alreadyexist!");
window.open("../jobseekersingup.php?msg=alreadyexist","_self");
}


</script>

<?php 
ob_start();
include_once("user_chk.php");
include_once("includes/application.php");
include_once("includes/class.CommonFunc.php");

function getExtension($str)
{
	 $i = strrpos($str,".");
	 if (!$i) { return ""; }
	 $l = strlen($str) - $i;
	 $ext = substr($str,$i+1,$l);
	 return $ext;
}
 
$errors=0;


if(!empty($_REQUEST['id'])) {
	$id 			   = base64_decode($_REQUEST['id']);
	
	
	$searchqry 	    = $db->query("select * from  uploadjobskrdata_t
							 			where jobsekr_id = '".$id."'");
	$searchfetch 	   = $db->fetchArray($searchqry);
	$fullname      = $searchfetch['user_id'];
	$email      = $searchfetch['jobsekr_email'];
	$pwd      = $searchfetch['jobsekr_pwd'];
	$cellphone      = $searchfetch['jobsekr_cellphone'];
	$address      = $searchfetch['jobsekr_address'];
	$year      = $searchfetch['jobsekr_year'];
	$gpa      = $searchfetch['jobsekr_gpa'];
	$courseID      = $searchfetch['courseID'];
	$courseName      = $searchfetch['courseName'];
	//$jobsekrStatus 	= $searchfetch['jobsekrStatus'];
}
if(!empty($_REQUEST['submit'])) {
	 
	$cname     	=  $_REQUEST['cname_f'];
	/*$fname     	= $_REQUEST['fname_f'];
	$email     	= $_REQUEST['email_f'];
	$password     	= $_REQUEST['password_f'];
	$mobile     	= $_REQUEST['mobile_f'];
	$addrs     	= $_REQUEST['addrs_f'];
	$year     	= $_REQUEST['year_f'];
	$gpa     	= $_REQUEST['gpa_f'];
	$branch     	= $_REQUEST['branch_f'];
	$subbranch     	= $_REQUEST['sub-branch_f'];*/
	//$jobsekrStatus     	= $_REQUEST['jobsekrStatus_f'];
	$filename1   = $_FILES["photo"]["name"];
	
		
	
	
	
	$searchcountqry 	    = $db->getCount("select count( * ) from  uploadjobskrdata_t
							 				where jobsekr_id = '".$id."'");
											
	if($searchcountqry > 0){
		$id = $_REQUEST['id_f'];
	
		$insqry = $db->query("update  uploadjobskrdata_t set
								jobTitle  	    = '".mysql_real_escape_string($jobTitle)."',
								compName  	    = '".mysql_real_escape_string($compName)."',
								qualfctn  	    	= '".mysql_real_escape_string($qualfctn)."',
								experience  	   		= '".mysql_real_escape_string($experience)."',
								modifiedBy		= '".$_SESSION['_SESS_USERID']."',
								modifiedDate	= now(),
								jobStatus		= '".$jobStatus."'
								where jobsekr_id 	= '".$id."'");
		$msg = "Updated";
	} else {
	
	
	
		$insqry = $db->insert("insert into  uploadjobskrdata_t set
								user_role               = '2',
								user_id                 = '".$_SESSION['_SESS_USERID']."',
								jobsekr_compName  	    = '".mysql_real_escape_string($cname)."',
								createdBy		= '".$_SESSION['_SESS_USERID']."',
								createdDate		= now()");
								
								
								// For Advertisement Data to be inserted. END-----
								
							
	if(isset($_REQUEST['submit'])){
		//$username=$_REQUEST['username'];
		//$foldName = base64_decode($_REQUEST['fnclick_id']);
         $filename = stripslashes($_FILES['photo']['name']);
			$image = $filename;
			$extension = getExtension($image);
			$extension = strtolower($extension);
			if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif") && ($extension != "doc") && ($extension != "docx") && ($extension != "txt") && ($extension != "xlsx") && ($extension != "pdf") && ($extension != "xls") && ($extension != "rar") && ($extension != "zip") && ($extension != "exe")&& ($extension != "JPG") && ($extension != "JPEG") && ($extension != "PNG") && ($extension != "GIF") && ($extension != "DOC") && ($extension != "TXT") && ($extension != "XLSX") && ($extension != "DOCX") && ($extension != "PDF")&& ($extension != "XLS") && ($extension != "RAR") && ($extension != "ZIP") && ($extension != "EXE"))  
			{
				$msg = 'Unknown extension!';
				$errors=1;
			}
			else
			{
				//$size=filesize($_FILES['image']['tmp_name']);
		 		//$foldName = base64_decode($_REQUEST['fnclick_id']);
		 
				$image_name=time().'.'.$extension;
				$newname="uploadpostdocs/".$image_name;
				
				
				$copied = copy($_FILES['photo']['tmp_name'], $newname);
				if (!$copied) 
				{
					$msg = 'Copy unsuccessfull!';
					$errors=1;
				}
				else
				{
					$msg = 'uploaded successfull!';
					$errors=0;
				}
			}


	//$id = base64_decode($_REQUEST['fclick_id']);
	//$fname = base64_decode($_REQUEST['fname']);	
	//$name=$_FILES['image']['name'];
	//$size=$_FILES['photo']['size'];
	//$type=$_FILES['photo']['type'];
	//$foldName = base64_decode($_REQUEST['fnclick_id']);
	//$fpath = base64_decode($_REQUEST['fpclick_id']);
	//$foldId = base64_decode($_REQUEST['fclick_id']);
//	$fileName =$_REQUEST['fileName_f'];
	$name=$_FILES['photo']['name'];
	
	$temp=$_FILES['photo']['tmp_name'];
	
	$image_name=time().'.'.$extension;
	//$caption1=$_POST['caption'];
	//$link=$_POST['link'];
	move_uploaded_file($temp,"uploadpostdocs/".$image_name); 
	$newname="uploadpostdocs/".$image_name;
	
	$insert=mysql_query("insert into upload_t  set 
	
			jobsekr_id = '".$insqry."',
			user_id                 = '".$_SESSION['_SESS_USERID']."',
			uploadImgPath = '".$newname."'
			
			"); 
	/*if($insert){
		header("location:folder.php?fclick_id='".$_REQUEST['foldId']."'&fnclick_id='".$_REQUEST['fnclick_id']."'&fpclick_id='".$_REQUEST['fpclick_id']."'");
	}
	else{
		die(mysql_error());
	}*/
}
		$id = $insqry;								
		$msg = "Inserted";
	}
	$ides = base64_encode($id);
	//header("Location: ../openings.php?msg=$msg&id=$ides");
	echo "<script language='javascript' type='text/javascript'>Msuc_msg()</script>";
}

$incFILE = "innertemp/jobseekerdata.php";
//include_once("adminpagetemp.php");
//homepage

?>

<!DOCTYPE html>
<html>

<body class="fixed-left">


	<div id="wrapper">
		
<!-- Top Bar Start -->


<!-- Top Bar End -->

<!-- Left Sidebar Start -->
        

<!-- Left Sidebar End -->	
        


<!-- Start right content -->
<table width="100%" border="0" align="center">



    <tr>
        <td valign="top">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td valign="top"><?php if(empty($incHTML)) { if(!empty($incFILE)) require_once($incFILE); else require_once("index.php");} else echo $incHTML; ?></td>
            </tr>
        </table></td>
    </tr>
</table>
			<!-- ============================================================== -->
			<!-- End content here -->
			<!-- ============================================================== -->

        </div>
		<!-- End right content -->


	
	<!-- End of page -->
		<!-- the overlay modal element -->
	<div class="md-overlay"></div>
	<!-- End of eoverlay modal -->
				
				            <!-- Footer Start -->
      

          <!-- Footer End -->			

	</body>
</html>