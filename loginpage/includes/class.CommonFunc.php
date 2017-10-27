<?php
/*
*
* @author: chandra Sekhar and RaghuRam
* 
* Description: Commmon functions for Database
*
*/
require_once("class.DBcore.php");
class CommonFunc extends DBcore {
	
	function CommonFunc() {
		$this->DBcore();
	}
	/*
	*
	* Input: SQL Query
	* OutPut: Returns First Row First Column Data
	* Usage: Ex.  $userName = $obj->getSL('SELECT userName FROM users WHERE userId=24');
	*
	*/
	function getSL( $Q ) {
		$retData[0] = "";
		if($link = $this->query($Q))
			$retData = $this->fetchArray($link);
		else
			return "";			
		return stripslashes($retData[0]);
	}
	/*
	*
	* Input: SQL Query
	* OutPut: Return Associate Array For Multiple Data (Single Row Multiple Columns) 
	* 			(returns Empty array when no data found)
	* Usage: Ex.  $userName = $obj->getML('SELECT userName,Address,Phone FROM users WHERE userId=24');
	*
	*/
	function getML( $Q ) {
		$retData = array();
		
		if($link = $this->query($Q))
			$retData = $this->fetchAssoc($link);
		else
			return $retData;
			
		if(!empty($retData))
		return $this->remT($retData);
		else
		return $retData;
	}
	/*
	*
	* Input: Array
	* OutPut: Removes Slashes from Array of Data
	* Usage: Ex.  $userName = $obj->remT(array);
	*
	*/
	function remT($D = array()) {
		if(!is_array($D)) $D=(array)$D;
		foreach($D as $k=>$v) {
			$D[$k] = stripslashes($v);
		}
		return $D;
	}
	/*
	*
	* Input: Array
	* OutPut: Adds Slashes in Array of Data
	* Usage: Ex.  $userName = $obj->addT(array);
	*
	*/
	function addT($D = array()) {
		foreach($D as $k=>$v) {
			$D[$k] = addslashes($v);
		}
		return $D;
	}
	
	/* 
	*  This Function creates a drop down list from given table
	* Input: Table Name, two Fields (comma seperate), Value, Where Condition
	* OutPut: Shows Drop Down List
	* Usage: Ex.  $obj->showList('users', 'userId,userName', '', 'userId=24');
	*/
	function showList( $Table , $Fields , $val="" , $Where='1'  ) {
		if( !$Table ) return;
		
		$Query = "SELECT ".$Fields."  FROM ".$Table." WHERE ".$Where." ";
		$Dbh = $this->query( $Query );
		while( $Data = $this->fetchArray( $Dbh ) ) {
			if( $val == $Data[0] ) {
				echo "<option value='$Data[0]' Selected>$Data[1]</option>";
			} else {
				echo "<option value='$Data[0]'>$Data[1]</option>";
			}
		}
	}
	/* 
	*  This Function creates Multiple drop down list from given table
	* Input: Table Name, two Fields (comma seperate), Value array, Where Condition
	* OutPut: Shows Drop Down List
	* Usage: Ex.  $obj->showList('users', 'userId,userName', array(12,20,24), '');
	*/
	function showMList( $Table , $Fields , $val=array() , $Where='1'  ) {
		if( !$Table ) return;
		
		$Query = "SELECT ".$Fields."  FROM ".$Table." WHERE ".$Where." ";
		$Dbh = $this->query( $Query );
		while( $Data = $this->fetchArray( $Dbh ) ) {
			if( in_array($Data[0], $val) ) {
				echo "<option value='$Data[0]' Selected>$Data[1]</option>";
			} else {
				echo "<option value='$Data[0]'>$Data[1]</option>";
			}
		}
	}
	
	# Navigation's   Previous | 1 | 2 | 3 | 4 | 5 | Next 
	function showNav($start,$total,$link,$interval=10) {
		global $len; 
		$en = $start+$len;
		if ($start == 0) {
			if ($total > 0) {
				$start1 = 1;
			} else {
				$start1 = 0;
			}
		} else {
			$start1 = $start+1;
		}
		if($en > $total)
			$en = $total;
		if($total != 0)
			$pagecount = ($total % $len)?(intval($total / $len)+1):($total / $len);
		else {
			print("<p align=center><br>No Results found<br></p>");
			$pagecount = 0;
			return;
		}
		print "<table  cellpading=0 cellspacing=0 align=left width=100% nowrap><tr>";
		print "<td width=21% class=bodytext valign=bottom height=25 align=left></td>";
		print "<td width=79% align=right valign=bottom>";
      if($en > $len) {
			$en1 = $start-$len;
			print "<a href='$link&start=$en1' class='link1'> Previous </a><span class='bodytext'> | </span>" ;
      } else
			print "<span class='bodytext'> Previous </span><span class='bodytext'> | </span>" ;
		
		# Caliculating Page Values
		$numstr="";
		$curpage = intval(($start+1)/$len)+1;
		if($pagecount > 10) {	
			$istart = (intval($curpage/10) * 10)+1;
			if($istart + 10 > $pagecount)
				$istart = $pagecount - 9;
			$pagecount = 10;
		} else
			$istart=1;
		for($i = $istart; $i < $pagecount+$istart; $i++ ) {
			$ed = ($i-1)*$len;
			if($start != $ed) {
				$numstr .= " <a href='$link&start=$ed' class='link1'> $i </a><span class='bodytext'> | </span>";
			} else { 
				$numstr .= "<span class='bodytext'> $i </span><span class='bodytext'> | </span>";
			}
		}
		print $numstr;
      if ($en < $total ) {
			$en2 = $start+$len;
			print "<a href='$link&start=$en2' class='link1'> Next </a>" ;
	  	} else {
			print "<span class='bodytext'> Next </span>" ;
		}
		print "</td></tr></table>";
	}
	
	# Navigation's   Previous | Next 
	function showNav2($start,$total,$link) {
		global $len; 
		
		if(($start%100) == 0) {
			$j = $start/10+1;
		} else if ($start/100 >= 1) {
			$j = intval(($start/100))*10+1;
		} else {
			$j = 1;
		}
		if((intval($start/100)) > 1) {
			$temp = intval(($start/100-1))*10*10;
		}
						
		print "<div align=center>";
		
		$check = $total % $len;
		if ($check >= 1 ) $lim = intval(($total/$len))+1;
		else $lim = intval($total/$len);
		
		print "<table  cellpading=0 cellspacing=0 align=center width=100% nowrap><tr><td width=100%><table width=100%  align=center ><tr><td width=100%>";
		$en = $start+$len;
		
		if($start == 0) {
			if($total > 0) {
			$start1  =1;
			} else {
			$start1 = 0;
			}
		} else {
			$start1 = $start+1;
		}
		if ($en > $total)  $en = $total;
		print "<span class='bodytext'>Showing  $start1  -  $en       of  $total   &nbsp;&nbsp;&nbsp;</span><a href='$link' class='link1'>Go to First Record</a> &nbsp;&nbsp;</font></td><td><!--<img src='../img/prev_button.gif' align=center>--><font face=Verdana, Arial, Helvetica, sans-serif size=1 class='bodytext'>" ; 
		
		if ($en > $len) {
		$en1 = $start-$len;
		print "<a href='$link&start=$en1' class='link1'>Previous</a>" ;
		} else
		print "Previous";
		
		print "</font>";
		$temp1 = 1;
	
		print "&nbsp;&nbsp;&nbsp;&nbsp;<font face=Verdana, Arial, Helvetica, sans-serif size=1 class='bodytext'>" ; 
		if($en < $total) {
		$en2 = $start+$len;function showList( $Table , $Fields , $val="" , $Where='1'  ) {
		if( !$Table ) return;
		
		$Query = "SELECT ".$Fields."  FROM ".$Table." WHERE ".$Where." ";
		$Dbh = $this->query( $Query );
		while( $Data = $this->fetchArray( $Dbh ) ) {
			if( $val == $Data[0] ) {
				echo "<option value='$Data[0]' Selected>$Data[1]</option>";
			} else {
				echo "<option value='$Data[0]'>$Data[1]</option>";
			}
		}
	}
		print "<a href='$link&start=$en2' class='link1'>Next</a>" ;
		} else
			print "Next";
		print "</font></td></tr></table></td></tr></table></div>";
	}

function practiceNav($start,$total,$link,$first,$end) {
		global $len; 
		print $total;
		if(($start%100) == 0) {
			$j = $start/10+1;
		} else if ($start/100 >= 1) {
			$j = intval(($start/100))*10+1;
		} else {
			$j = 1;
		}
		if((intval($start/100)) > 1) {
			$temp = intval(($start/100-1))*10*10;
		}
						
		print "<div align=center>";
		
		$check = $total % $len;
		if ($check >= 1 ) $lim = intval(($total/$len))+1;
		else $lim = intval($total/$len);
		
		print "<table  cellpading=0 cellspacing=0 align=center width=100% nowrap><tr><td width=100%><table width=100%  align=center ><tr><td width=100% align='center'>";
		$en = $start+$len;
		
		if($start == 0) {
			if($total > 0) {
			$start1  =1;
			} else {
			$start1 = 0;
			}
		} else {
			$start1 = $start+1;
		}
		if ($en > $total)  $en = $total;
		
		
		if ($en > $len) {
		$en1 = $start-$len;
		print "<a href='$link&start=$en1' class='link1'>Previous</a>" ;
		} else
		print "Previous";
		
		print "</font>";
		$temp1 = 1;
	
		print "&nbsp;&nbsp;&nbsp;&nbsp;<font face=Verdana, Arial, Helvetica, sans-serif size=1 class='bodytext'>" ; 
		if($en < $total) {
		$en2 = $start+$len;
		print "<a href='$link&start=$en2' class='link1'>Next</a>" ;
		} else
			print "Next";
		print "</font></td></tr></table></td></tr></table></div>";
	}

	

function showRadio( $Table , $Fields , $val="" , $Where='1', $name ) {
		$i=0;
		if( !$Table ) return;
		print '<table width="95%" border="0" cellspacing="0" cellpadding="0"><tr>';
		$Query = "SELECT ".$Fields."  FROM ".$Table." WHERE ".$Where." ";
		$Dbh = $this->query( $Query );
		while( $Data = $this->fetchArray( $Dbh ) ) {
			if( $val == $Data[0] ) {
				
echo "<td ><input type = radio  name='$name' value='$Data[0]' checked></td><td width='50%' class='bodytext'>$Data[1]</td>";
			} else {
				echo "<td ><input type = radio  name='$name' value='$Data[0]' ></td><td width='50%' class='bodytext'>$Data[1]</td>";
			}
  if( ($i%2 ==1))
                  print "</tr>";
                   $i++;
		}
		print "</table>";
	}

function showCheck( $Table , $Fields , $val="" , $Where='1', $name ) {
		$i=0;
		if( !$Table ) return;
		print '<table width="95%" border="0" cellspacing="0" cellpadding="0"><tr>';
		$Query = "SELECT ".$Fields."  FROM ".$Table." WHERE ".$Where." ";
		$Dbh = $this->query( $Query );
		while( $Data = $this->fetchArray( $Dbh ) ) {
			if( $val == $Data[0] ) {
				
echo "<td ><input type = checkbox  name='$name' value='$Data[0]' checked></td><td width='50%' class='bodytext'>$Data[1]</td>";
			} else {
				echo "<td ><input type = checkbox  name='$name' value='$Data[0]' ></td><td width='50%' class='bodytext'>$Data[1]</td>";
			}
  if( ($i%2 ==1))
                  print "</tr>";
                   $i++;
		}
		print "</table>";
	}

function drawNavigation2($start,$total,$link,$len=10)
{
	$en = $start +$len;
	if($start==0)
	{
		if($total>0)
		{
			$start1=1;
		}
		else 
		{
			$start1=0;
		}
	}
	else 
	{
		$start1=$start+1;
	}
    if($en>$total)
		$en = $total;
	if($total!=0)
			$pagecount=($total % $len)?(intval($total / $len)+1):($total / $len);
	else
	{
		print("<span align='center' class='bodytext' ><br>No Results found<br></span>");
		$pagecount=0;
		return;
	}
	print "<table  cellpading='0' cellspacing='0' align='left' width='100%' ><tr>";
	print "<td width='21%' class='bodytext' valign='bottom'  align='left'>Showing $start1 - $en of $total</td>";
	print "<td width='79%' align='right' valign='bottom'>";
        if($en>$len)
        {
		$en1=$start-$len;
		print "<a href='$link&start=$en1' class='link1'> Previous </a><span class='bodytext'> | </span>" ;
        }
		else
			print "<span class='bodytext'> Previous </span><span class='bodytext'> | </span>" ;
		
		// Caliculating Page Values
		$numstr="";
		$curpage=intval(($start+1)/$len)+1;
		if($pagecount > 10)
		{
			
			$istart=(intval($curpage/10) * 10)+1;
			if($istart + 10 > $pagecount)
				$istart=$pagecount - 9;
			$pagecount=10;
		}
		else
			$istart=1;
		for($i=$istart;$i<$pagecount+$istart;$i++)
		{
			$ed=($i-1)*$len;
			if($start!=$ed)
			{
				$numstr.= " <a href='$link&start=$ed' class='link1'> $i </a><span class='bodytext'> | </span>";
				
			}
			else { 
				//if($i >1 )
					$numstr.= "<span class='bodytext'> $i </span><span class='bodytext'> | </span>";
				//else
					//$numstr.= "<span class='bodytext'> | </span>";
			}
		}
		print $numstr;
        if($en<$total)
		{
			$en2=$start+$len;
			print "<a href='$link&start=$en2' class='link1'> Next </a>" ;
	  	}
		else
			print "<span class='bodytext'> Next </span>" ;
	print "</td></tr></table>";
        
}
}//class
?>
