<?php 
ob_start();
include_once("user_chk.php");
include_once("includes/application.php");
include_once("includes/class.CommonFunc.php");


if(!empty($_REQUEST['id'])) {
	$id 			   = base64_decode($_REQUEST['id']);
	$searchqry 	    = $db->query("select * from  jobs_m_t
							 			where jobID = '".$id."'");
	$searchfetch 	   = $db->fetchArray($searchqry);
	$jobTitle      = $searchfetch['jobTitle'];
	$compName      = $searchfetch['compName'];
	$qualfctn      = $searchfetch['qualfctn'];
	$experience      = $searchfetch['experience'];
	$jobStatus 	= $searchfetch['jobStatus'];
}
if(!empty($_REQUEST['submit'])) {
	$jobTitle     	= $_REQUEST['jobname_f'];
	$compName     	= $_REQUEST['compName_f'];
	$qualfctn     	= $_REQUEST['qualfctn_f'];
	$experience     	= $_REQUEST['experience_f'];
	$jobStatus   	  = $_REQUEST['status_f'];
	$searchcountqry 	    = $db->getCount("select count( * ) from  jobs_m_t
							 				where jobID = '".$id."'");
											
	if($searchcountqry > 0){
		$id = $_REQUEST['id_f'];
		$insqry = $db->query("update  jobs_m_t set
								jobTitle  	    = '".mysql_real_escape_string($jobTitle)."',
								compName  	    = '".mysql_real_escape_string($compName)."',
								qualfctn  	    	= '".mysql_real_escape_string($qualfctn)."',
								experience  	   		= '".mysql_real_escape_string($experience)."',
								modifiedBy		= '".$_SESSION['_SESS_USERID']."',
								modifiedDate	= now(),
								jobStatus		= '".$jobStatus."'
								where jobID 	= '".$id."'");
		$msg = "Updated";
	} else {
		$insqry = $db->insert("insert into  jobs_m_t set
								jobTitle  	    = '".mysql_real_escape_string($jobTitle)."',
								compName  	    = '".mysql_real_escape_string($compName)."',
								qualfctn  	    	= '".mysql_real_escape_string($qualfctn)."',
								experience  	    	= '".mysql_real_escape_string($experience)."',
								createdBy		= '".$_SESSION['_SESS_USERID']."',
								createdDate		= now(),
								jobStatus 		= '".$jobStatus."'");
		$id = $insqry;								
		$msg = "Inserted";
	}
	$ides = base64_encode($id);
	header("Location: vieweditjob.php?msg=$msg&id=$ides");
}
$incFILE = "innertemp/addeditjobs.php";
include_once("adminpagetemp.php");
?>