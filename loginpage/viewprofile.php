<?php 
ob_start();
include_once("user_chk.php");
include_once("includes/application.php");
include_once("includes/class.CommonFunc.php");
/*if($_SESSION['_SESS_SELLMYBIZZ_USERROLE'] != 1){
	header("Location: headerpage.php?msg=abuse");
} 
*/if(!empty($_REQUEST['id'])) {
	$id 			  = base64_decode($_REQUEST['id']);
	$searchqry 	   = $db->query("select
							user_firstname,user_lastname,filepath,user_name,user_dob,user_gender,
							user_address,user_cellphone,user_email,user_status,decode(user_pwd,'sellmybiz') as oldpassword
										from users_m_t
							 			where user_id = '".$id."'");
	$searchfetch 	 = $db->fetchArray($searchqry);
	
	$firstName 	   = $searchfetch['user_firstname'];
	$secondName      = $searchfetch['user_lastname'];
	$usrimagepath 	= $searchfetch['filepath'];
	$userid 	   	  = $searchfetch['user_name'];
	$dob    	 	 = $searchfetch['user_dob'];
	$gender 	 	  = $searchfetch['user_gender'];
	$address     	 = $searchfetch['user_address'];
	$mobileno    	= $searchfetch['user_cellphone'];
	$email 		   = $searchfetch['user_email'];
	$status   		  = $searchfetch['user_status'];
	$oldpassword     = $searchfetch['oldpassword'];
	
}
if(!empty($_REQUEST['submit'])) {
	$userfname       = $_REQUEST['userfname_f'];
	$usersname       = $_REQUEST['usersname_f'];
	$dob    	 	 = getsqlDateFormat($_REQUEST['dob_f']);
	$gender    	  = $_REQUEST['gender_f'];
//	$userid    	  = $_REQUEST['userid_f'];
	$address    	 = $_REQUEST['address_f'];
	$mobileno     	= $_REQUEST['mobileno_f'];
	$email 		   = $_REQUEST['email_f'];
//	$nPass           = $_REQUEST['nPass'];
//	$status   		  = $_REQUEST['status_f'];
	$usrimagepath   	   = $_FILES['imagepath_f']['name']; 

/*	$searchcountqry 	   = $db->getCount("select * from users_m_t
							 			where user_email = '".mysql_real_escape_string($email)."' 
										and user_name  	    	= '".mysql_real_escape_string($userid)."'
										and user_role = 2 and user_status = 'E'");
	if($searchcountqry > 0){
		$msg = "Existing";
		header("Location: viewprofile.php?msg=$msg");
	}
*/
	if(!empty($_REQUEST['id_f'])){
		$id = $_REQUEST['id_f'];
		$insqry = $db->insert("update users_m_t set
								user_firstname  	= '".mysql_real_escape_string($userfname)."',
								user_lastname  		= '".mysql_real_escape_string($usersname)."',
								user_address  	   	= '".mysql_real_escape_string($address)."',
								user_cellphone  	= '".mysql_real_escape_string($mobileno)."',
								user_email  	    = '".mysql_real_escape_string($email)."',
								user_dob  	    	= '".mysql_real_escape_string($dob)."',
								user_gender  		= '".mysql_real_escape_string($gender)."',
								modifiedBy			= '".$_SESSION['_SESS_USERID']."',
								modifiedDate		= '".date('Y-m-d')."',
								user_status 		= '".$status."'
								where user_id 		= '".$id."'");
		$msg = "Updated";
	} else {
		$insqry = $db->insert("insert into users_m_t set
								user_firstname  	= '".mysql_real_escape_string($userfname)."',
								user_lastname  		= '".mysql_real_escape_string($usersname)."',
								user_address  	   	= '".mysql_real_escape_string($address)."',
								user_cellphone  	= '".mysql_real_escape_string($mobileno)."',
								user_email  	    = '".mysql_real_escape_string($email)."',
								user_dob  	    	= '".mysql_real_escape_string($dob)."',
								user_gender  		= '".mysql_real_escape_string($gender)."',
								createdBy			= '".$_SESSION['_SESS_USERID']."',
								createdDate			= '".date('Y-m-d')."',
								user_status 		= '".$status."'");
		$msg = "Inserted";
		  $id = $insqry;
	}
	if(!empty($_REQUEST['nPass'])){
		$insqry = $db->query("update users_m_t 
								set
									user_pwd 			= (ENCODE('" . mysql_real_escape_string($nPass) . "','sellmybiz'))
								where
									user_id 		= '".$id."'");
	}
	if(!empty($usrimagepath)) {
			$file_name=$_FILES["imagepath_f"]["name"];
			$temp_name=$_FILES["imagepath_f"]["tmp_name"];
			$imgtype=$_FILES["imagepath_f"]["type"];
			$ext= GetImageExtension($imgtype);
			$imagename="userid_".$id.$ext;
			$target_path = "uploadusrimgs/".$imagename;
			if(move_uploaded_file($temp_name, $target_path)) {
			
				$insqry = $db->query("update users_m_t 
										set
											filepath = '".$target_path."'
										where
											user_id 		= '".$id."'");
			   $msg = "Successfully uploading image on the server";
			}else{
			   $msg = "Error While uploading image on the server";
			} 
	}	
	$ides = base64_encode($id);
	header("Location: viewprofile.php?msg=$msg&id=$ides");
}
$incFILE = "innertemp/viewprofile.php";
include_once("adminpagetemp.php");
?>