<?php
ob_start();
include_once("user_chk.php");
include_once("includes/application.php");
include_once("includes/class.CommonFunc.php");

if(!empty($_POST['submit']))
{
	$f_oPass = $_POST['oPass'];
	$f_nPass = $_POST['nPass'];
	$f_cPass = $_POST['cPass'];
	$Error = 'true';
	$Errorpass ='false'; 

	$id='false';
if((empty($f_oPass))||(empty($f_nPass))||(empty($f_cPass))){
		$Error = 'false';
	}
	if($f_nPass==$f_cPass){
		$Errorpass ='true'; 
	}
	if($Error=='false'){
		$msg = "Please Enter The All Mandatary Details";
	}
	else if($Errorpass=='false'){
		$msg = "New Password AND Confirm password are Mismatch";
	}
	else{
	  $count=$db->getCount("SELECT count(*) 
						FROM 
							users_m_t  
						WHERE 
							user_pwd = ENCODE('".mysql_real_escape_string($f_oPass)."','vsvtech') 
						AND 
		                      	user_id ='".mysql_real_escape_string($_SESSION['_SESS_USERID'])."'");
		
		if($count==1)
		{
//			$histid = $db->query("insert into `users_h_t` select * from `users_m_t` where csbMgrId = '".$_SESSION['_SESS_USERID']."'");
			$id = $db->query("UPDATE users_m_t
			                     SET 
								 user_pwd = (ENCODE('" . mysql_real_escape_string($f_nPass) . "','vsvtech'))
								 WHERE 
								   		user_id =". mysql_real_escape_string($_SESSION['_SESS_USERID'])."");	
										
			if($id==1)
			{
	    	$msg= " Your Password Has Been Changed Succesfully ";
			//function_redirection("location:chgpwcsbmgr.php?&var=".OLIRDB_encrypt('msg='.$msg.'&params=msg')."\""); 					
		
			}
			else
			{
			$msg= " Password Not Updated ";
			}		  
		}else
		{
			$msg= " Old Password Doesn't Exists ";
		}
	  }
	header("Location: changepassword.php?msg=$msg");
}	  	
$incFILE = "innertemp/changepassword.php";
include_once("homepagetemp.php");
?>