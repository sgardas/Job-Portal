<script language="javascript" type="text/javascript">

function MReg_msg()
{
alert("Thanks for register.");
window.open("../employer-login.php?msg=Registered","_self");
}
function MFail_msg()
{
alert("Message not sent and Query not Updated! Please Try Again Later");
window.open("../jobseeker-login.php?msg=MFail","_self");
}
function Mmandat_msg()
{
alert("Fields Are Mandatory");
window.open("../jobseeker-login.php?msg=Mandatory","_self");
}
function MExists_msg()
{
alert("Sorry! Fields are alreadyexist!");
window.open("../jobseeker-login.php?msg=alreadyexist","_self");
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

function employee_msg()
{
//alert("Sorry! Fields are alreadyexist!");
window.open("../studentdata.php?msg=success","_self");
}

function notassgn_msg()
{
alert("Sorry! User details not assigned!");
window.open("../jobseeker-login.php?msg=notassgn","_self");
}

function abuse_msg()
{
alert("Sorry! Fields are not correct!");
window.open("../jobseeker-login.php?msg=alreadyexist","_self");
}


function contactinv_msg()
{
alert("Sorry! Fields are not correct!");
window.open("../jobseeker-login.php?msg=contactinv","_self");
}

function abuse_msg()
{
alert("Sorry! Fields are not correct!");
window.open("../jobseeker-login.php?msg=contactinv","_self");
}

function invalid_msg()
{
alert("Sorry! Fields are not correct!");
window.open("../jobseeker-login.php?msg=invalid","_self");
}

</script>


<?php
session_start();

require_once("includes/application.php");
require_once("includes/class.ExtLogin.php");
$um = new ExtLogin;



if(isset($_POST['submit'])) {
	if(!empty($_POST['userLogin_f']) && !empty($_POST['passwd_f'])) {
		
		
		# get user data
		$v_loginData[0] = $_POST['userLogin_f'];
		$v_loginData[1] = $_POST['passwd_f'];
		/*
		* Start of MAC
		* Getting MAC Address using PHP
		* T. Chandra Sekhar
		* Start of MAC
		*/
		
		ob_start(); // Turn on output buffering
		system('ipconfig /all'); //Execute external program to display output
		$mycom=ob_get_contents(); // Capture the output into a variable
		ob_clean(); // Clean (erase) the output buffer
		
		$findme = "Physical";
		$pmac = strpos($mycom, $findme); // Find the position of Physical text
		$mac = substr($mycom,($pmac+36),17); // Get Physical Address
		/*  
		* End of MAC
		*/
		// checking whether the login data is there or not
	//	echo $v_loginData[0]." -- ".$v_loginData[1];
		if(!empty($v_loginData[0]) &&!empty($v_loginData[1])) 
		{ 
			if($um->Login($v_loginData))
			{
				//session_register("_SESS_USERID");// registering the session variable of user id
				//session_register("_SESS_USERNAME"); // registering the session variable user name
				//session_register("_SESS_USERMAIL"); // registering the session variable user type
		
				$_SESSION['_SESS_USERID'] = $um->getUserId();
				$_SESSION['_SESS_USERNAME'] = $um->getUsername();
				$_SESSION['_SESS_USERMAIL'] = $um->getUserMail();
				$_SESSION['_SESS_USERMOBILE'] = $um->getUserMobile();
				$_SESSION['_SESS_USERROLE'] = $um->getUserRoleId();
				if($_SESSION['_SESS_USERROLE'] == 1){
					//header("Location: home.php");
					echo "<script language='javascript' type='text/javascript'>admin_msg()</script>";
				} else if($_SESSION['_SESS_USERROLE'] == 2){
					//header("Location: ../openings.php");
					echo "<script language='javascript' type='text/javascript'>jobseeker_msg()</script>";
				} else if($_SESSION['_SESS_USERROLE'] == 3){
					echo "<script language='javascript' type='text/javascript'>employee_msg()</script>";
				
					//header("Location: ../studentdata.php");
				} else {
					//header("Location: index.php?msg=notassgnd");
					echo "<script language='javascript' type='text/javascript'>notassgn_msg()</script>";
				}
			} else {
				//session_register("LoginCount"); // checking the login count
				@$_SESSION['LoginCount'] += 1;
				if($_SESSION['LoginCount'] > 3)
				// if login fails continuosly three times then it throws the error message
				{
					//header("Location: index.php?msg=abuse");
					echo "<script language='javascript' type='text/javascript'>abuse_msg()</script>";
					$_SESSION['LoginCount'] = 0;
				} else {
					//header("Location: index.php?msg=contactinv");
					echo "<script language='javascript' type='text/javascript'>contactinv_msg()</script>";
				}
				exit();
			 }
		 } else	{
			//header("Location: index.php?msg=invalid");
			echo "<script language='javascript' type='text/javascript'>invalid_msg()</script>";
		 }	
	} else if(isset($_POST['fname_f']) && isset($_POST['email_f'])  && isset($_POST['mobile_f']) && isset($_POST['addrs_f']) && isset($_POST['year_f']) && isset($_POST['gpa_f']) && isset($_POST['branch_f']) && isset($_POST['subbranch_f']) && isset($_POST['password_f']) ) {
// 	and BINARY user_pwd=ENCODE('".$_POST['password_f']."','vsvtech') 

		$results = $db->getCount("select COUNT(*)
										from 
											users_m_t 
										where 
											BINARY  user_name='".$_POST['email_f']."'
											and BINARY  user_email='".$_POST['email_f']."' 
											and user_status='1'");
		if($results == 0) 
		{
	
		$insertid = $db->insert("Insert into users_m_t 
												set 
													user_role = 2,
													user_firstname ='".$_POST['fname_f']."',
													user_email ='".$_POST['email_f']."',
													user_cellphone ='".$_POST['mobile_f']."',
													user_address ='".$_POST['addrs_f']."',
													user_year ='".$_POST['year_f']."',
													user_gpa ='".$_POST['gpa_f']."',
													user_branch ='".$_POST['branch_f']."',
													user_subBranch ='".$_POST['subbranch_f']."',
													user_name ='".$_POST['email_f']."',
													createdDate = '".date('Y-m-d')."',
													user_pwd=ENCODE('".$_POST['password_f']."','vsvtech'),
													user_status = 1");
													
		// For Advertisement Data to be inserted. END-----
			$id = 1;
			for($i=0;$i<count($_FILES['upfiles']['name']);$i++){
					$uploaddir="uploadpostdocs/";
					
					$filename = split('[.]',$_FILES['upfiles']['name'][$i]);
					
					$docs = $insertid."_".$insertid."_".$id.".".$filename[1];
					$uploadfile = $uploaddir.$docs;

					//$filename = compress_image($_FILES['upfiles']['tmp_name'][$i], $uploadfile,45); 
					if(file_get_contents($uploadfile)){
						$addimgid = $db->insert("Insert into upload_t 
														set 
													  upload_id 		= '".$insertid."',
													  uploadImgPath 	= '".$filename."',
													  uploadImgStatus = 'P'");
					}

				$id++;
			}
																

			$_SESSION['_SESS_USERID'] = $insertid;
			$_SESSION['_SESS_USERNAME'] = $_POST['fname_f'];
			$_SESSION['_SESS_USERMAIL'] = $_POST['email_f'];
			$_SESSION['_SESS_USERMOBILE'] = $_POST['mobile_f'];
			$_SESSION['_SESS_USERROLE'] = 3;
			
			
			//header("Location: ../jobseeker-login.php?registered");
			echo "<script language='javascript' type='text/javascript'>MReg_msg()</script>";
			
		} else {
			//header("Location: ../jobseeker-login.php?msg=alreadyexists");
			echo "<script language='javascript' type='text/javascript'>MExists_msg()</script>";
		}
	} else {
		//header("Location: ../jobseeker-login.php?msg=Mandatory");
		echo "<script language='javascript' type='text/javascript'>Mmandat_msg()</script>";
	}
} else {
	//header("Location: ../jobseeker-login.php?msg=Mandatory");
	echo "<script language='javascript' type='text/javascript'>Mmandat_msg()</script>";
}
?>
