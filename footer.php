
		<div id="footer">
		
		<!-- /// FOOTER     ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->

			<div class="container">
                <!--<div class="row">
                    <div class="span3" id="footer-widget-area-4">
                        
                        <div class="widget ewf_widget_contact_info">
                    
                            <h5 class="widget-title">Page Links</h5>
                            
                            <ul>
                                
                                <li>
                           
                               <a href="enquiry.php">Job Seekers</a>
                                 

                                </li>
                                <li>
                           
                               <a href="services.php">Employer</a>
                                 

                                </li>
                                
                               
                            </ul>
                            
                        </div>
                        
                    </div>
                    <div class="span3" id="footer-widget-area-2">
                        
                        <div class="widget ewf_widget_latest_posts">
                                    
                            <h5 class="widget-title">Social Links</h5>
                        
                            <div class="widget ewf_widget_social_media"> 
                            
                            <div>
                                
                                <a href="#" class="facebook-icon social-icon">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                
                                <a href="#" class="twitter-icon social-icon">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                
                                <a href="#" class="pinterest-icon social-icon">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                                
                                <a href="#" class="googleplus-icon social-icon">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                                 <a href="#" class="youtube-icon social-icon">
                                    <i class="fa fa-youtube"></i>
                                </a>
                                
                            </div>
                            
                        </div>
                                  
                                
                                    
                                   
                        </div>
                        
                    </div>
                   
                    <div class="span3" id="footer-widget-area-1">
                        
                        <div class="widget widget_text">
                        
                            <div class="textwidget">
                                
                               
                               <div class="span12">
                         <h5 class="widget-title">News Letter</h5>
                          <form  name="subform_F" action="sendmail.php" method="post" class="form-inline"  onSubmit="javascript: return valid1();" >
                            <fieldset>
                                <div id="formstatus"></div>
                                 <p>
                                   <input class="span12" type="text" name="email"  id="email" value="" placeholder="Email"> 
                                </p>
                                 <p class="last">
                                    <input type="submit" class="btn"  name="submit" id="submit"  value="Submit" >
                                </p>
                            </fieldset>
                        </form>
                        </div>
                                
                            </div>
                            
                        </div>
                            
                       
                        
                    </div>
                    <div class="span3" id="footer-widget-area-4">
                        
                        <div class="widget ewf_widget_contact_info">
                    
                            <h5 class="widget-title">Branch Address</h5>
                           <h4> Job Poartal </h4><h6>Recruitment & Consulting Services</h6>
                      
            <p style="color:#FFFFFF;">

Regd. Office <br />
No.11, 4th Floor,<br />
Jamnabai building, Oomer Park,<br />
Bhulabhai Desai Road,<br />
Warden Road, Mumbai - 400036</p>

                               
      <script language="javascript">
		  function valid1()
		  {
		  var f = document.subform_F;
		
		  if(f.email.value==''){
		  alert("Please Enter Email");
		  f.email.focus();
		  return false; 
		  }
		  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		  if(!filter.test(f.email.value)){
		  alert("Please enter the valid email");
		  f.email.focus();
		  return false;		
		  }
		  return true;
		  }
	</script>     


                      
                        </div>
                        
                    </div>
                </div>
            </div>
            
		

		</div><!-- end #footer -->
		<!--<div id="footer-bottom">
            
		
		
			<div class="container">
                <div class="row">
                    <div class="span8" id="footer-bottom-widget-area-1">
                        
                        <div class="widget widget_text">
                        
                            <div class="textwidget">
                                
                                <p>
                                	<span class="text-highlight"><a href="index.php" style="color:#FFFFFF;">Job Poartal</a>
                                	2016 &copy; All rights reserved</span> 
                                </p>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="span4" id="footer-bottom-widget-area-2">
                        
                        <div class="widget widget_text">
                        
                           <p>
                    <span class="text-highlight">Designed By</span>
                   <span class="text-highlight"><a href="http://www.sj-solutions.in" target="_blank" style="color:#FFFFFF;">SJ Solutions</a></span> 
                                	
                                </p>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
		
		  
		
		</div>-->
		
	</div>
    
   <!-- <a id="back-to-top" href="#">
    	<i class="ifc-up4"></i>
    </a>-->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});
</script>
    <!-- /// jQuery ////////  -->
	<script src="assets/vendors/jquery-2.1.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- /// ViewPort ////////  -->
	<script src="assets/vendors/viewport/jquery.viewport.js"></script>
    
    <!-- /// Easing ////////  -->
	<script src="assets/vendors/easing/jquery.easing.1.3.js"></script>

    <!-- /// SimplePlaceholder ////////  -->
	<script src="assets/vendors/simpleplaceholder/jquery.simpleplaceholder.js"></script>

    <!-- /// Fitvids ////////  -->
    <script src="assets/vendors/fitvids/jquery.fitvids.js"></script>
    
    <!-- /// Animations ////////  -->
    <script src="assets/vendors/animations/animate.js"></script>
     
    <!-- /// Superfish Menu ////////  -->
	<script src="assets/vendors/superfish/hoverIntent.js"></script>
    <script src="assets/vendors/superfish/superfish.js"></script>
    
    <!-- /// Revolution Slider ////////  -->
    <script src="assets/vendors/revolutionslider/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/vendors/revolutionslider/js/jquery.themepunch.revolution.min.js"></script>
    
    <!-- /// bxSlider ////////  -->
	<script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    
   	<!-- /// Magnific Popup ////////  -->
	<script src="assets/vendors/magnificpopup/jquery.magnific-popup.min.js"></script>
    
    <!-- /// Isotope ////////  -->
	<script src="assets/vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="assets/vendors/isotope/isotope.pkgd.min.js"></script>
    
    <!-- /// Parallax ////////  -->
	<script src="assets/vendors/parallax/jquery.parallax.min.js"></script>

	<!-- /// EasyPieChart ////////  -->
	<script src="assets/vendors/easypiechart/jquery.easypiechart.min.js"></script>
    
	<!-- /// YTPlayer ////////  -->
	<script src="assets/vendors/itplayer/jquery.mb.YTPlayer.js"></script>
	
    <!-- /// Easy Tabs ////////  -->
    <script src="assets/vendors/easytabs/jquery.easytabs.min.js"></script>	
    
    <!-- /// Form validate ////////  -->
    <script src="assets/vendors/jqueryvalidate/jquery.validate.min.js"></script>
    
	<!-- /// Form submit ////////  -->
    <script src="assets/vendors/jqueryform/jquery.form.min.js"></script>
    
    <!-- /// gMap ////////  -->
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="assets/vendors/gmap/jquery.gmap.min.js"></script>

	<!-- /// Twitter ////////  -->
	<script src="assets/vendors/twitter/twitterfetcher.js"></script>
	
	<!-- /// Custom JS ////////  -->
	<script src="assets/js/main.js"></script>	
    
    
</body>
</html>
