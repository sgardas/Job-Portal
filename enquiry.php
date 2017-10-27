<?php include("header2.php")?>
	
		
		
		<!-- /// CONTENT  /////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="span12" style="width:100%; padding:0;" >
                    	
                        <div class="headline">
                        	
                      
                        <img src="assets/images/enquiry.jpg" />     
                        </div><!-- end .headline -->
                        
                    </div>
			<!-- end #page-header -->
 
 
 
 
            
            
<div class="content" style="background-color:burlywood;">
<div class="container">
    <!-- end .spsn12 -->

<div class="row"  >

    <div class="span12" >
  
    <div class="span3">
          <p style="background-color:#f9b125; padding:10px; color:#FFF; font-size:12px;">As a best practice company, we realize that the little things make the most difference. </p>
        <img src="assets/images/best_practices.jpg" />  
       
        
    </div><!-- end .span3 -->
   
    <div class="span9" style="padding-top:0em;">
  
    <div class="span12" >
    <div class="wrap">

    <div class="main">
    <p style="padding:0.2em 0.5em; color:#666666; font-size:20px; ">Welcome to &nbsp;<span style="font-size:28px; color:#000000; font-weight:600;" >Job</span><span style="font-size:28px;color:#f49521;font-weight:600;" >Sketch </span></p> 
    <p style="color:#666666; font-size:15px; line-height:1em;">
    If you are someone looking for that ideal thrust for your career, you are at the right place!!!</p>
    <p style="color:#666666; font-size:15px; line-height:1em; padding-bottom:3em;" ><a href="openings.php" style="color:#fff;">Click here</a> to view the current openings</p>
            <form name="form_F" method="post" action="enqry.php" onSubmit="javascript: return valid();" enctype="multipart/form-data">
            <input type="hidden" name="id_f" id="id_f" value="<?php if(!empty($id)) { echo $id; } ?>" />  
                <fieldset>
<style>
table, th, td {
border:none; 
}
th, td {
padding:0;
color:#FFFFFF;
vertical-align: middle;
}
table p{
font-size:14px;
color:#000000;
padding-top:10px;
}
</style>
                    <div id="formstatus"></div>
                    <table >
                    <tr>
                    <td><p>Name <span>*</span></p></td>
                    <td>
                        <input class="span12" type="text" name="name_f"  id="name_f">
                    </td>
                    </tr>
                <tr>
                    <td><p>Email <span>*</span></p></td>
                    <td>
                    
                       <input class="span12" type="text" name="email_f"  id="email_f" > 
                   </td>
                    </tr>
                <tr>
                    <td><p>Phone</p></td>
                    <td>
                    
                       <input class="span12" type="text" id="phone_f" name="phone_f"> 
                   </td>
                    </tr>
                <tr>
                    <td><p>Total Work Experience (Years)</p></td>
                    <td>
                    
    
                       <input class="span12" type="text" name="experience_f" id="experience_f" > 
                    </td>
                    </tr>
                <tr>
                    <td><p>What kind of job you are looking for?</p></td>
                    <td>
    
    
                       <input class="span12" type="text" name="job_f" id="job_f" > 
                   </td>
                    </tr>
                <tr>
                    <td><p>Present C.T.C (If applicable)</p></td>
                    <td>
    
    
                       <input class="span12" type="text"  name="presentsal_f" id="presentsal_f"> 
                    </td>
                    </tr>
                <tr>
                    <td><p>Expected C.T.C</p></td>
                    <td>
    
         
                       <input class="span12" type="text" name="expsal_f" id="expsal_f" > 
                    </td>
                    </tr>
                <tr>
                    <td><p>Message</p></td>
                    <td>
                        <textarea rows="2" cols="4"  name="message_f" id="message_f"   class="span12" placeholder=""></textarea>
                  </td>
                    </tr>
                <tr>
                    <td><p>Attach Resume</p></td>
                    <td>
                    
                       <input class="span12" type="file" id="image" name="image" value="" placeholder="Upload Resume"> 
                  
                    </td></tr>
                    
                    <tr><td></td><td style="padding-top:2em;">
                    <p class="last">
                        <input id="submit" class="btn btn-primary" type="submit" name="submit" value="Submit" >
                    </p></td></tr></table>
                </fieldset>
            </form>
                  
              </div>
              
    </div>
    </div>
    
    </div>

</div>
</div>
</div><!--end .main-->
</div>



    
<style>
/*----- Tabs -----*/
/*----- Tabs -----*/
.tabs {
	width:100%;
	display:inline-block;
}

	/*----- Tab Links -----*/
	/* Clearfix */
	.tab-links:after {
		display:block;
		clear:both;
		content:'';
	}

	.tab-links li {
		margin:0px 65px;
		
		float:left;
		list-style:none;
	}

		.tab-links a {
		text-decoration: none;
    padding: 9px 15px;
    display: inline-block;
    border-radius: 3px 3px 0px 0px;
    background:#fff;
    font-size: 16px;
    font-weight: 600;
    color: #999;
    transition: all linear 0.15s;
		}

		.tab-links a:hover {
			background:#FF6600;
			text-decoration:none;
		}

	.tabs li.active a,.tabs  li.active a:hover {
		background:#FF6600;
		color:#fff;
	}

	/*----- Content of Tabs -----*/
	.tab-content {
		padding:15px;
		border-radius:3px;
		/*box-shadow:-1px 1px 1px rgba(0,0,0,0.15);*/
		background:#fff;
	}

		.tab {
			display:none;
		}

		.tab.active {
			display:block;
		}
</style>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>
jQuery(document).ready(function() {
	// Standard
	jQuery('.tabs.standard .tab-links a').on('click', function(e)  {
		var currentAttrValue = jQuery(this).attr('href');

		// Show/Hide Tabs
		jQuery('.tabs ' + currentAttrValue).show().siblings().hide();

		// Change/remove current tab to active
		jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

		e.preventDefault();
	});

	// Animated Fade
	jQuery('.tabs.animated-fade .tab-links a').on('click', function(e)  {
		var currentAttrValue = jQuery(this).attr('href');

		// Show/Hide Tabs
		jQuery('.tabs ' + currentAttrValue).fadeIn(400).siblings().hide();

		// Change/remove current tab to active
		jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

		e.preventDefault();
	});

	// Animated Slide 1
	jQuery('.tabs.animated-slide-1 .tab-links a').on('click', function(e)  {
		var currentAttrValue = jQuery(this).attr('href');

		// Show/Hide Tabs
		jQuery('.tabs ' + currentAttrValue).siblings().slideUp(400);
		jQuery('.tabs ' + currentAttrValue).delay(400).slideDown(400);

		// Change/remove current tab to active
		jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

		e.preventDefault();
	});

	// Animated Slide 2
	jQuery('.tabs.animated-slide-2 .tab-links a').on('click', function(e)  {
		var currentAttrValue = jQuery(this).attr('href');

		// Show/Hide Tabs
		jQuery('.tabs ' + currentAttrValue).slideDown(400).siblings().slideUp(400);

		// Change/remove current tab to active
		jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

		e.preventDefault();
	});
});

</script>

<script>
function valid(){
	var f = document.form_F;
	 var letter = /^[A-Za-z. ]+$/;
	if(f.name_f.value == ''){
		alert("Please Enter Name");
		f.name_f.focus();
		return false;
	}
	
	
	else if(!letter.test(f.name_f.value))
	 	  {
 	      alert("Please Enter only Alphabates");
 	      f.name_f.focus();
  	      return false;
 	      }
		  
	if(f.email_f.value == ''){
		alert("Please Enter E-mail-Id");
		f.email_f.focus();
		return false;
	}
	 var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		  if(!filter.test(f.email_f.value)){
		  alert("Please enter the valid email");
		  f.email_f.focus();
		  return false;		
		  }
	
	return true;
}
</script>

<style>
@media(max-width:1366px){
input[type="text"], input[type="password"], input[type="date"], input[type="datetime"], input[type="datetime-local"], input[type="month"], input[type="week"], input[type="email"], input[type="number"], input[type="search"], input[type="tel"], input[type="time"], input[type="url"], input[type="color"], textarea {
display: block;
width: 100%;
-webkit-appearance: none;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
padding: 10px 20px;
border: 0;
margin-bottom: 1px;
background-color: #f0efef;
color: #222;
border: 1px solid rgba(34,34,34,0.5);
/* box-shadow: 2px 3px 10px grey; */
border-radius: 5px;
}
table {
border-collapse: separate;
border-spacing: 0;
border-width: 1px 0 0 1px;
margin-bottom: 20px;
table-layout: fixed;
width: 75%;
}
}
@media(max-width:425px){

table {
border-collapse: separate;
border-spacing: 0;
border-width: 1px 0 0 1px;
margin-bottom: 20px;
table-layout: fixed;
width: 100%;
}
}
</style>         

               
<?php include("footer.php")?>