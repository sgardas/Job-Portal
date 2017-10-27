
<?php
ob_start();
include_once("user_chk.php");
include_once("includes/application.php");
include_once("includes/class.CommonFunc.php");
//$total1 			= $db->getCount("select count(*) from blog_m_t where user_status = 1");
$total2 			= $db->getCount("select count(*) from users_m_t where user_status = 1");
//$total3 			= $db->getCount("select count(*) from proddetail_t where prodStatus = 'A'");
//BYE
//$total41 		   = $db->getCount("select count(*) from postBuyProd_t where hidReqments = 2 and postBuyProdStatus = 'A'");
//SALE
//$total42		   = $db->getCount("select count(*) from postBuyProd_t where hidReqments = 1 and postBuyProdStatus = 'A'");
//$total6 			= $db->getCount("select count(*) from prodbilldetail_t");
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
				<div class="row top-summary">
					<div class="col-lg-3 col-md-6">
						<div class="widget green-1 animated fadeInDown">
							<div class="widget-content padding">
								<div class="widget-icon">
									<i class="icon-globe-inv"></i>
								</div>
								<div class="text-box">
									<p class="maindata">TOTAL <b>Openings</b></p>
									<?php /*?><h2><span class="animate-number" data-value="<?php echo $total1; ?>" data-duration="3000">0</span></h2<?php */?>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="widget-footer">
								<div class="row">
									<div class="col-sm-12">									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					


				</div>
				<!-- End of info box -->

				

				
				

				

	<!-- Footer Start -->
    
<?php include("includes/footer.php") ?>

	<!-- Footer End -->			

</div>
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