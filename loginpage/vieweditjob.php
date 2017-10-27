<?php 
ob_start();
include_once("user_chk.php");
include_once("includes/application.php");
include_once("includes/class.CommonFunc.php");
if(empty($_REQUEST['start'])){
	$start = 0;
}else{
	$start = $_REQUEST['start'];
}
$len=10;
$searchqry 	     = $db->query("select * from jobs_m_t order by jobID DESC  ");
$total 			= $db->getCount("select count(*) from jobs_m_t");
if(!empty($_REQUEST['delid'])){
	$id = base64_decode($_REQUEST['delid']);
	
	$insqry = $db->query("update  jobs_m_t set
							modifiedBy			= '".$_SESSION['_SESS_USERID']."',
							modifiedDate		= now(),
							jobStatus	 		= 'D'
							where jobID = '".$id."'");
	$msg = "Updated";
	header("Location: vieweditjob.php?msg=$msg");
}
$incFILE = "innertemp/vieweditjob.php";
include_once("adminpagetemp.php");
?>