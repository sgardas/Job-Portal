<?php
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
		print("<span align=center class='bodytext' ><br>No Results found<br></span>");
		$pagecount=0;
		return;
	}
	print "<table cellpading=0 cellspacing=0 align=left width=100% ><tr>";
	print "<td width=20% class=bodytext valign=bottom height=25>Showing $start1 - $en of $total</td>";
	print "<td width=71% align=right valign=bottom>";
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

function getDateFormat($dat)
{
	if(!empty($dat))
	{
		list($year, $month, $day) = split('[/.-]', $dat);
		$date= $day."-".$month."-".$year;
		return $date;
	}
	else
	{
		return "";
	}
}

function getsqlDateFormat($dat)
{
	if(!empty($dat))
	{
		list($day, $month, $year) = split('[/.-]', $dat);
		$date= $year."-".$month."-".$day;
		return $date;
	}
	else
	{
		return "";
	}
}

function showdbdateformat($dbdate)
{
	if(!empty($dbdate))
	{
		list($day, $month, $year) = explode('-', $dbdate);
//		$date= $day."-".$month."-".$year;
		if($month == 'Jan'){
			$monthval = '01';
		} else if($month == 'Feb'){
			$monthval = '02';
		} else if($month == 'Mar'){
			$monthval = '03';
		} else if($month == 'Apr'){
			$monthval = '04';
		} else if($month == 'May'){
			$monthval = '05';
		} else if($month == 'Jun'){
			$monthval = '06';
		} else if($month == 'Jul'){
			$monthval = '07';
		} else if($month == 'Aug'){
			$monthval = '08';
		} else if($month == 'Sep'){
			$monthval = '09';
		} else if($month == 'Oct'){
			$monthval = '10';
		} else if($month == 'Nov'){
			$monthval = '11';
		} else if($month == 'Dec'){
			$monthval = '12';
		}else {
			
		}
		return $year."-".$monthval."-".$day;
	}
	else
	{
		return "";
	}
}

function editdbdateformat($dbdate)
{
	if(!empty($dbdate))
	{
		list($year, $month, $day) = explode('-', $dbdate);
//		$date= $day."-".$month."-".$year;
		if($month == '01'){
			$monthval = 'Jan';
		} else if($month == '02'){
			$monthval = 'Feb';
		} else if($month == '03'){
			$monthval = 'Mar';
		} else if($month == '04'){
			$monthval = 'Apr';
		} else if($month == '05'){
			$monthval = 'May';
		} else if($month == '06'){
			$monthval = 'Jun';
		} else if($month == '07'){
			$monthval = 'Jul';
		} else if($month == '08'){
			$monthval = 'Aug';
		} else if($month == '09'){
			$monthval = 'Sep';
		} else if($month == '10'){
			$monthval = 'Oct';
		} else if($month == '11'){
			$monthval = 'Nov';
		} else if($month == '12'){
			$monthval = 'Dec';
		}else {
			$monthval = '00';
		}
		return $day."-".$monthval."-".$year;
	}
	else
	{
		return "";
	}
}






function getplname($id)
{
	global $db;
	if(!empty($id))
	{
		$userres = $db->fetchArray($db->query("select plname from reg_pat_m_t where plname = '".$id."' "));
		return $userres[0];
	}
	else
	{
		return "";
	}
}




function getid($id)
{
	global $db;
	if(!empty($id))
	{
		$userres = $db->fetchArray($db->query("select id from reg_pat_m_t where id = '".$id."' "));
		return $userres[0];
	}
	else
	{
		return "";
	}
}




function getage($id)
{
	global $db;
	if(!empty($id))
	{
		$userres = $db->fetchArray($db->query("select age from reg_pat_m_t where age = '".$id."'"));
		return $userres[0];
	}
	else
	{
		return "";
	}
}


function getcid($id)
{
	global $db;
	if(!empty($id))
	{
		$userres = $db->fetchArray($db->query("select cid from reg_pat_m_t where cid = '".$id."' "));
		return $userres[0];
	}
	else
	{
		return "";
	}
}

function getrefncname($id)
{
	global $db;
	if(!empty($id))
	{
		$userres = $db->fetchArray($db->query("select refncname from reg_pat_m_t where refncname = '".$id."' "));
		return $userres[0];
	}
	else
	{
		return "";
	}
}


function getrefndname($id)
{
	global $db;
	if(!empty($id))
	{
		$userres = $db->fetchArray($db->query("select refndname from reg_pat_m_t where refndname = '".$id."'"));
		return $userres[0];

	}
	else
	{
		return "";
	}

}

function getsdd($id)
{
	global $db;
	if(!empty($id))
	{
		$userres = $db->fetchArray($db->query("select sdd from reg_pat_m_t where sdd = '".$id."' "));
		return $userres[0];
	}
	else
	{
		return "";
	}
}


function getsso($id)
{
	global $db;
	if(!empty($id))
	{
		$userres = $db->fetchArray($db->query("select sso from reg_pat_m_t where sso = '".$id."' "));
		return $userres[0];
	}
	else
	{
		return "";
	}
}




function gettextarea($id)
{
	global $db;
	if(!empty($id))
	{
		$userres = $db->fetchArray($db->query("select textarea from reg_pat_m_t where textarea = '".$id."' "));
		return $userres[0];
	}
	else
	{
		return "";
	}
}


function getgender($id)
{
	global $db;
	if(!empty($id))
	{
		$userres = $db->fetchArray($db->query("select gender from reg_pat_m_t where gender = '".$id."' "));
		return $userres[0];
	}
	else
	{
		return "";
	}
}

function getphone($id)
{
	global $db;
	if(!empty($id))
	{
		$userres = $db->fetchArray($db->query("select phone from reg_pat_m_t where phone = '".$id."' "));
		return $userres[0];
	}
	else
	{
		return "";
	}
}

function GetImageExtension($imagetype)
 {
   if(empty($imagetype)) return false;
   switch($imagetype)
   {
	   case 'image/bmp': return '.bmp';
	   case 'image/gif': return '.gif';
	   case 'image/jpeg': return '.jpg';
	   case 'image/png': return '.png';
	   default: return false;
   }
 }

function gettotalcost($id)
{
	global $db;
	if(!empty($id))
	{
		$userres = $db->fetchArray($db->query("select totalcost from reg_pat_m_t where totalcost = '".$id."' "));
		return $userres[0];
	}
	else
	{
		return "";
	}
}

function getprofile($id)
{
	global $db;
	if(!empty($id))
	{
		$userres = $db->fetchArray($db->query("select profile from reg_pat_m_t where profile = '".$id."' "));
		return $userres[0];
	}
	else
	{
		return "";
	}
}


function getuname($id)
{
	global $db;
	if(!empty($id))
	{
		$userres = $db->fetchArray($db->query("select user_firstname from  users_m_t where user_id = '".$id."' "));
		return $userres[0];
	}
	else
	{
		return "";
	}
}

function getupass($id)
{
	global $db;
	if(!empty($id))
	{
		$userres = $db->fetchArray($db->query("select user_pwd from  users_m_t where user_id = '".$id."' "));
		return $userres[0];
	}
	else
	{
		return "";
	}
}

function getuemail($id)
{
	global $db;
	if(!empty($id))
	{
		$userres = $db->fetchArray($db->query("select user_email from  users_m_t where user_id = '".$id."' "));
		return $userres[0];
	}
	else
	{
		return "";
	}
}


function getumbl($id)
{
	global $db;
	if(!empty($id))
	{
		$userres = $db->fetchArray($db->query("select user_cellphone from  users_m_t where user_id = '".$id."' "));
		return $userres[0];
	}
	else
	{
		return "";
	}
}



function getuadrs($id)
{
	global $db;
	if(!empty($id))
	{
		$userres = $db->fetchArray($db->query("select user_address from  users_m_t where user_id = '".$id."' "));
		return $userres[0];
	}
	else
	{
		return "";
	}
}



function getuyr($id)
{
	global $db;
	if(!empty($id))
	{
		$userres = $db->fetchArray($db->query("select user_year from  users_m_t where user_id = '".$id."' "));
		return $userres[0];
	}
	else
	{
		return "";
	}
}




function getugpa($id)
{
	global $db;
	if(!empty($id))
	{
		$userres = $db->fetchArray($db->query("select user_gpa from  users_m_t where user_id = '".$id."' "));
		return $userres[0];
	}
	else
	{
		return "";
	}
}




function getubrnch($id)
{
	global $db;
	if(!empty($id))
	{
		$userres = $db->fetchArray($db->query("select jobsekr_branch from  uploadjobskrdata_t where user_id = '".$id."' "));
		return $userres[0];
	}
	else
	{
		return "";
	}
}


function getsubbranch($id)
{
	global $db;
	if(!empty($id))
	{
		$userres = $db->fetchArray($db->query("select jobsekr_subBranch from  uploadjobskrdata_t where user_id = '".$id."' "));
		return $userres[0];
	}
	else
	{
		return "";
	}
}


function getcname($id)
{
	global $db;
	if(!empty($id))
	{
		$userres = $db->fetchArray($db->query("select user_branch from  users_m_t where user_id = '".$id."' "));
		return $userres[0];
	}
	else
	{
		return "";
	}
}



?>