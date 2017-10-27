<?php

session_start();


?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    
	<title>Job Poartal</title>
	<meta name="description" content=" add description  ... ">
    
    <!-- /// Favicons ////////  -->
   <!-- <link rel="shortcut icon" href="favicon.png">
	<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
	<meta name="msapplication-TileColor" content="#f9b125">
	<meta name="msapplication-TileImage" content="mstile.png">-->
	<meta name="theme-color" content="#f9b125">
	
	
	<!-- /// Google Fonts ////////  -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,800,800italic">
    
    <!-- /// FontAwesome Icons 4.3.0 ////////  -->
	<link rel="stylesheet" href="assets/fonts/fontawesome/font-awesome.min.css">
    
    <!-- /// Custom Icon Font ////////  -->
    <link rel="stylesheet" href="assets/fonts/iconfontcustom/icon-font-custom.css">  
    
	<!-- /// Plugins CSS ////////  -->
	<link rel="stylesheet" href="assets/vendors/revolutionslider/css/settings.css">
    <link rel="stylesheet" href="assets/vendors/bxslider/jquery.bxslider.css">
	<link rel="stylesheet" href="assets/vendors/magnificpopup/magnific-popup.css">
    <link rel="stylesheet" href="assets/vendors/animations/animate.min.css">
	<link rel="stylesheet" href="assets/vendors/itplayer/css/YTPlayer.css">
	
	<!-- /// Template CSS ////////  -->
	<link rel="stylesheet" href="assets/css/reset.css">
	<link rel="stylesheet" href="assets/css/grid.css">
	<link rel="stylesheet" href="assets/css/elements.css">
	<link rel="stylesheet" href="assets/css/layout.css">
	<link rel="stylesheet" href="assets/css/components.css">
	<link rel="stylesheet" href="assets/css/wordpress.css">
    
	<!-- /// Boxed layout ////////  -->
    
    <link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="assets/css/default.css" />
       
        <link rel="stylesheet" type="text/css" href="assets/css/main-style.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/component.css" />
		<script src="assets/js/modernizr.custom.js"></script>
	<!-- <link rel="stylesheet" href="assets/css/boxed.css"> -->
   
    <!-- /// Template Skin CSS ////////  -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<!-- <link rel="stylesheet" href="assets/css/skins/default.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/skins/blue.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/skins/green.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/skins/purple.css"> -->
 
 	
    
</head>
<body >
	
    
    
	<div id="wrap">
		<div id="header-wrap">
			<div id="header"  style=" z-index:999999; ">
			
			<!-- /// HEADER  //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

                     <!--<div class="span2" style="float:right; height:50px; background-color:#CCCCCC; color:#000000;">
                   
                                <ul class="sf-menu fixed" id="menu">
                                    <li>
                                    	<a href="index.php"><span>Home</span></a>
                                        
                                    </li> 
                                    <li >
                                        <a href="page-left-sidebar.php"><span>About us</span></a></li></ul>
                     
                     </div>-->
                    
                    
                    
                   
                    
                    
                    
				<div class="container">
                    <div class="row">
                        <div class="span3">
                        
                            <!-- // Logo // -->
                            <div id="logo">
                                <a href="index.php">
                               <!-- <h1 style="font-size:45px; text-transform:uppercase; padding-top:0.8em;">Job Sketch</h1>-->
                                    <!--<img src="assets/images/logo.jpg" alt="website logo"  style="vertical-align:bottom; width:65px;">-->
                                </a>
                            </div>
                        
                        </div><!-- end .span3 -->
                        <div class="span9" >
                        
                            <!-- // Mobile menu trigger // -->
                            
                            <a href="#" id="mobile-menu-trigger">
                                <i class="fa fa-bars"></i>
                            </a>
                            
                            <!-- // Custom search // -->                                        
                            
                           <!-- <form action="#" id="custom-search-form" method="get" role="search">
                        		<input id="s" type="text" name="s" placeholder="">
                                <input id="custom-search-submit" type="submit" value="">
                            </form>-->
                            
                            <!-- // Menu // -->
                            
                            <nav>
                                <ul class="sf-menu " id="menu">
                                   
                                        
                                        
                                     <li><?php if(!isset($_SESSION['_SESS_USERID'])) { ?> <a href="jobseeker-login.php"><span>Jobseeker Login</span></a> &nbsp;<li></span> <a href="employer-login.php"><span>Employer Login</span></a></li> <?php } else { ?><a href="#"><span><?php echo $_SESSION['_SESS_USERNAME']; ?></span></a>&nbsp;<li style="marign-right:9px; margin-top:9px; padding-left:4px;"><a href="logout.php">Logout</a></li><?php } ?></li>
                                      
                                       
                                        
                                        
                                          
                                  
                                  
                                </ul>
                            </nav>	
    
                        </div><!-- end .span9 -->
                    </div><!-- end .row -->		
				</div><!-- end .container -->
			
            <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

			</div><!-- end #header -->
		</div><!-- end #header-wrap -->	
