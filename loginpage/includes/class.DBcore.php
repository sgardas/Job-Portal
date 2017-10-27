<?php
ob_start();
/*
*
* @author: Chandra Sekhar and RaghuRam
* 
* Description: This is DATABASE Abstraction Class
*
*/
class DBcore {
	var $dblink, $dbhost, $dbuser, $dbpass, $dbname, $link, $Errno, $Error;
	var $affected_rows; 

	function DBcore()
	{
		global $db_conn_vars;
		$this->getdblinks($db_conn_vars);
	}

	function getdblinks($pm_dbvars)
	{    
		/*$this->dbhost = $pm_dbvars["dbhost"];
		$this->dbuser = $pm_dbvars["dbuser"];
		$this->dbpass = $pm_dbvars["dbpass"];
		$this->dbname = $pm_dbvars["dbname"];*/
		$this->dbhost = $pm_dbvars["dbhost"];
		$this->dbuser = $pm_dbvars["dbuser"];
		$this->dbpass = $pm_dbvars["dbpass"];
		$this->dbname = $pm_dbvars["dbname"];
		$this->link = $this->open();
		return $this->link;		
	}
	
	function setdblinks($pm_dblink, $pm_dbhost, $pm_dbuser, $pm_dbpass, $pm_dbname)
	{
		$this->dbhost = $pm_dbhost;
		$this->dbuser = $pm_dbuser;
		$this->dbpass = $pm_dbpass;
		$this->dbname = $pm_dbname;
	}
	function open()
	{    
		$t_link = mysql_pconnect($this->dbhost, $this->dbuser, $this->dbpass);
		if(!$t_link){
			$this->Errno = mysql_errno();
			$this->Error = mysql_error();
			$this->error("Unable to Connect the Server".$this->dbhost);
		}
		$bool   = mysql_select_db($this->dbname);
		if(!$bool){
			$this->Errno = mysql_errno();
			$this->Error = mysql_error();
			$this->error("Database Not Found :".$this->dbname);
		}
		return $t_link;
		break;
	}

	function query($my_qry)
	{
		// $this->link = $this->open();
		// $qid = mysql_query ($my_qry, $this->link);
		// $this->affected_rows = @mysql_affected_rows();
		// $this->close($this->link);
		
		//$this->link = $this->open()
		$this->open();
		//$qid = mysql_query ($my_qry, $this->link);
		$qid = mysql_query ($my_qry);
		$this->affected_rows = @mysql_affected_rows();
		//$this->close($link2);
		
		if(!$qid){
		$this->Errno = mysql_errno();
		$this->Error = mysql_error();
		$this->error("Problem In Executing the Query:" . $my_qry);
		}
		return $qid;
	}

	function insert($my_qry)
	{
/*		$this->link = $this->open();
		$qid  = mysql_query ($my_qry, $this->link);
		$iid  = mysql_insert_id();
		$this->close($this->link);
*/		
		$this->open();
		$qid = mysql_query ($my_qry);
		$iid  = mysql_insert_id();
//		$this->affected_rows = @mysql_affected_rows();

		if(!$qid){
			$this->Errno = mysql_errno();
			$this->Error = mysql_error();
			$this->error("Problem In Executing the Query:" . $my_qry);
		}
		return $iid;
	}
	function getCount($my_qry)
	{
		// returns the count value.
		$this->open();
		$qid = mysql_query ($my_qry);
		$iid  = mysql_insert_id();

/*		$this->link = $this->open();
		$qid  = mysql_query ($my_qry, $this->link);
		$this->close($this->link);
*/		if(!$qid){
			$this->Errno = mysql_errno();
			$this->Error = mysql_error();
			$this->error("Problem In Executing the Query:" . $my_qry);
		}
		$count =   $this->fetchArray($qid);
		return $count[0];
	}

	function fetchArray($qid) 
	{
		return @mysql_fetch_array($qid);
	}

	function fetchRow($qid) 
	{
		return mysql_fetch_row($qid);
	}
	
	function fetchObject($qid) 
	{
		return @mysql_fetch_object($qid);
	}

	function numRows($qid) 
	{
		return @mysql_num_rows($qid);
	}

	function affectedRows() 
	{
		// for insert, update, delete reasons.
		return $this->affected_rows;
	}
	
	function fetchAssoc($qid) 
	{
		// for insert, update, delete reasons.
		return mysql_fetch_assoc($qid);
	}

	function freeResult($qid) 
	{
		mysql_free_result($qid);
	}

	function numFields($qid) 
	{
		return mysql_num_fields($qid);
	}

	function close($link) 
	{
		mysql_close($link);
	}

	function error($msg) 
	{
		print "<b>Error in Query Execution.</b>";
		DB_DEBUG AND printf("<b>Error : </b> %s<br>\n", $msg);
		DB_DEBUG AND printf("<b>MySQL Error</b>: %s (%s)<br>\n", $this->Errno, $this->Error);
	}
	function settime($limit,$data="")
	{
		for($i=0;$i<=$limit;$i++){
		if(!empty($data)){
		?>
		<option value = <?=$i?> <? if($data == $i){ ?>selected <? } ?>><?=$i?></option>
		<?php } else{ ?>
		<option value = <?=$i?>><?=$i?></option>
		<?php }
		}
	}
	
}// end of the class
?>
