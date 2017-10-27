<?php
ob_start();
include_once("user_chk.php");
include_once("includes/application.php");
include_once("includes/class.CommonFunc.php");
?>
<!DOCTYPE html>
<html>
<head>


<?php include("includes/head_links.php") ?>


</head>


<body class="fixed-left">


	<div id="wrapper">
		
<!-- Top Bar Start -->

<?php include("includes/top_header.php") ?> 

<!-- Top Bar End -->

<!-- Left Sidebar Start -->
        
<?php include("includes/left_menu.php") ?>  

<!-- Left Sidebar End -->	
        


<!-- Start right content -->
        <div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">
				<!-- Start info box -->
				<div class="row top-summary" style="height:auto">
				<!-- End of info box --></div>
			<!-- ============================================================== -->
			<!-- End content here -->
			<!-- ============================================================== -->

        </div>
		<!-- End right content -->

	</div>
	
	<!-- End of page -->
		<!-- the overlay modal element -->
	<div class="md-overlay"></div>
	<!-- End of eoverlay modal -->

	</body>
</html>