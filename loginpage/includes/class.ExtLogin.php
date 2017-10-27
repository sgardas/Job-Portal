<?php
/*
*
* @author: Chandra Sekhar 
* 
* Description: This Class Handles Authanticated Users Login
*
*/
require_once("class.CommonFunc.php");
class ExtLogin extends CommonFunc{
	var $uid, $uname;
	function ExtLogin() {
		$this->uid = null;
		$this->UserName=null;
		$this->CommonFunc();
	}
	/*
	*
	* Input: LoginData (Array)
	* OutPut: Returns TRUE on Succcess or FALSE on Failure
	*
	*/
	function Login($loginData) 
	{ 
		$loginData = $this->addT($loginData);
		$sql2="SELECT COUNT(*) from users_m_t WHERE BINARY  user_name='$loginData[0]'
				   AND BINARY user_pwd=ENCODE('$loginData[1]','vsvtech') 
				   AND user_status='1'";
		$count2 = $this->getCount($sql2);
//		echo $sql2;
//		echo "count ".$sql2;
//		die();
		if($count2 > 0) 
		{
			$qry = "SELECT user_id,user_role,user_firstname,user_lastname,user_email,user_cellphone 
						FROM users_m_t WHERE BINARY  user_name='$loginData[0]'
					   	AND BINARY user_pwd=ENCODE('$loginData[1]','vsvtech') 
					   	AND user_status='1'";
//			echo $qry;
//			die();						
			$data = $this->getML($qry);
			if(empty($data)) return FALSE;
			$this->uid 		 = $data['user_id'];
			$this->Username 	= $data['user_firstname']." ".$data['user_lastname'];
			$this->Usermail 	= $data['user_email'];
			$this->Usermobile  = $data['user_cellphone'];
			$this->Userrole 	= $data['user_role'];
			if(empty($this->uid)) return FALSE;
			if(empty($this->Username)) return FALSE;
			if(empty($this->Usermail)) return FALSE;
			if(empty($this->Usermobile)) return FALSE;
			if(empty($this->Userrole)) return FALSE;
			return TRUE;
		}
		return FALSE;
	}  //close for function Login
	/*
	* Input: NULL
	* OutPut: Returns UsersRoleId
	* Usage: Ex.  $UsersRoleId = $obj->getroleId();
	*
	*/
	function getUserRoleId() 
	{
		if($this->Userrole == null ) 
		{
			return "";
		} else 
		{
			return $this->Userrole;
		}
	}
	/*
	* Input: NULL
	* OutPut: Returns UsersId
	* Usage: Ex.  $userId = $obj->getUid();
	*
	*/
	function getUserId() 
	{
		if($this->uid == null ) 
		{
			return "";
		} else 
		{
			return $this->uid;
		}
	}
	/*
	*
	* Input: NULL
	* OutPut: Returns UserName
	* Usage: Ex.  $userName = $obj->getUname();
	*
	*/
	function getUsername() 
	{
		if($this->Username == null ) 
		{
			return "";
		} else 
		{
			return $this->Username;
		}
	}
		
	/*
	* Input: NULL
	* OutPut: Returns Usermail
	* Usage: Ex.  $Usermail = $obj->getUserMail();
	*
	*/
	function getUserMail() 
	{
		if($this->Usermail == null ) 
		{
			return "";
		} else 
		{
			return $this->Usermail;
		}
	}

	/*
	* Input: NULL
	* OutPut: Returns Usermail
	* Usage: Ex.  $Usermail = $obj->getUserMail();
	*
	*/
	function getUserMobile() 
	{
		if($this->Usermobile == null ) 
		{
			return "";
		} else 
		{
			return $this->Usermobile;
		}
	}
	//End Function
}
?>