<?php 

ob_start();

include_once("user_chk.php");

include_once("includes/application.php");

include_once("includes/class.CommonFunc.php");

$searchdoccount	 = '';

if(!empty($_REQUEST['id'])) {

	$id 			   = base64_decode($_REQUEST['id']);

	$searchqry 	    = $db->query("select * from rental_m_t

							 			where headerId = '".$id."'");

										

	$searchfetch 	  	 = $db->fetchArray($searchqry);

	
	$usrimagepath 	   = $searchfetch['filepath1'];
	
	$headerId 	      = $searchfetch['headerId'];

	$headerName 	    = $searchfetch['headerName'];

	$headerDesc 	    = $searchfetch['headerDesc'];

	//$modifiedDate      = $searchfetch['modifrDesc'];

	//$createdDate  	   = $searchfetch['creatiedDate'];

	$headerStatus      = $searchfetch['headerStatus'];



//	$metaTitle 	     = $searchfetch['metaTitle'];

//	$metaDesc 	  	  = $searchfetch['metaDesc'];

//	$metaKwds 	 	  = $searchfetch['metaKwds'];

//	$othrCodes1 	   	= $searchfetch['othrCodes1'];

//	$othrCodes2 	   	= $searchfetch['othrCodes2'];

//	$othrCodes3 	   	= $searchfetch['othrCodes3'];

//	$othrCodes4 	   	= $searchfetch['othrCodes4'];

//	$othrCodes5 	   	= $searchfetch['othrCodes5'];

//	$othrCodes6 	   	= $searchfetch['othrCodes6'];

//	$othrCodes7 	   	= $searchfetch['othrCodes7'];

//	$othrCodes8 	   	= $searchfetch['othrCodes8'];



}

if(!empty($_REQUEST['submit'])) {

	$usrimagepath   	   = $_FILES['imagepath_f']['name']; 

	$name     = $_REQUEST['name_f'];
	
	$headerName = $_REQUEST['name_f'];

	$description = $_REQUEST['textarea_f'];
	
	$status   = $_REQUEST['status_f'];



//	$metattl    = $_REQUEST['metattl_f'];

//	$metadesc   = $_REQUEST['metadesc_f'];

//	$metakwds   = $_REQUEST['metakwds_f'];

//	$othrscode  = $_REQUEST['othrscode_f'];

	$query1 = '';



	$searchcountqry 	    = $db->getCount("select count( * ) from rental_m_t

							 				where headerId = '".$id."'");

	if($searchcountqry > 0){

		$id = $_REQUEST['id_f'];



		$insqry = $db->insert("update rental_m_t set
		
								headerName = '".mysql_real_escape_string($headerName)."',
								
								

								headerDesc = '".mysql_real_escape_string($description)."',
								

								headerStatus  		= '".$status."',	

								modifiedBy			= '".$_SESSION['_SESS_USERID']."',

								modifiedDate		= '".date('Y-m-d')."'

								where headerId = '".$id."'");

		$msg = "Updated";

	} else {

	

		$insqry = $db->insert("insert into rental_m_t set

								headerDesc = '".mysql_real_escape_string($description)."',
								

								headerStatus  = '".$status."',

								createdBy			= '".$_SESSION['_SESS_USERID']."',

								createdDate			= '".date('Y-m-d')."'");

		$msg = "Inserted";

		$id = $insqry;

	}

					

// Uploading file into the folder from an array. --START--



	$otheruploadefile = substr($query1, 0, -1);

	if(!empty($otheruploadefile)){

		$otheruploadefiles = ",".substr($query1, 0, -1);

	} else {

		$otheruploadefiles = '';

	}



	$query2 = '';

	for($i=0; $i<count($othrscode); $i++) {

		if(!empty($othrscode[$i])) {

			$query2 = "othrCodes".($i+1)."=".'"'.$othrscode[$i].'"'.",".$query2;

		}							

	}

	$othercode = substr($query2, 0, -1);

	if(!empty($othercode)){

		$othercodes = substr($query2, 0, -1);

	} else {

		$othercodes = '';

	}
	
	if(!empty($usrimagepath)) {
		if(!empty($_REQUEST['prvimagepath_f'])){
			$prvimagepath = $_REQUEST['prvimagepath_f'];
			unlink($prvimagepath);
		}
		$uploaddir="uploadhomeimgs/";
		$filename = $_FILES['imagepath_f']['name'];
		$docs = $id."_".$filename;
		$uploadfile = $uploaddir.$docs;
		$tmp_name = $_FILES['imagepath_f']['tmp_name'];
		move_uploaded_file($tmp_name, $uploadfile);
		$query1 = " ,podfilepath =".'"'.$uploadfile.'"'."";
		
		
		$insqry = $db->query("update rental_m_t 
								set
									filepath1 = '".$uploadfile."'
								where
									headerId 		= '".$id."'");
									
	}	

	$updateqry = $db->query("UPDATE  rental_m_t 

									SET 

									headerStatus  = '".$status."',

									$othercodes 

									WHERE headerId='".$id."'");

	

// Uploading file into the folder from an array. --END--

	$ides = base64_encode($id);

	header("Location: homeheaderpage.php?msg=$msg&id=$ides");

}

$incFILE = "innertemp/homeheaderpage.php";

include_once("homepagetemp.php");

?>