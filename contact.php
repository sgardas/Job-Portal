<?php include("header.php")?>
         
         <div class="span12" style="width:100%; padding:0;" >
                    	
                        <div class="headline">
                        	
                            <img src="assets/images/contact.jpg" />
                            
                        </div><!-- end .headline -->
                        
                    </div>
                     <div class="content" style=" background-color:lemonchiffon;">
                      <div class="container">
              
            
            
           
             <style>
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
    background-color: #fff;
    color: #222;
}
		   </style>    
          <style>
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
    width: 65%;
}
		   </style>
            	<div class="row"  >
                	<!-- end .span9 -->
                   
                
                    <div class="span12">
                	<div class="span6">
                    
                    
                  
                  
                 <h2 align="left" class="text">Contact Address</h2>
                
                              
             <p style="color:#666666; font-size:20px; "><span style="font-size:28px; color:#000000; font-weight:600;" >Job</span><span style="font-size:28px;color:#f49521;font-weight:600;" >Portal</span></p> 
             <h6>Developers team</h6>
<p>University ave<br />
Lowell, Massachusetts<br />
01854<br />

                                  

                                </p>
                   
                    
                    
                    
                    
                    </div>
                    <div class="span6" style="padding-bottom:1em;">
            			
                        <h2 style="padding-bottom:2em;">Leave a reply</h2>
                        <form name="contact_F" method="post" action="contactmail.php" onSubmit="return valid2();">
                         <table >
                                <tr>
                                <td><p>Name *</p></td>
                                <td>
                               
                                    <input class="span12" type="text"  name="name" id="name" value="" placeholder="">
                                </td>
                                </tr>
                            <tr>
                                <td><p>Email *</p></td>
                                <td>
                                
                                   <input class="span12" type="text"  name="email1" id="email1" value="" placeholder=""> 
                               </td>
                                </tr>
                            <tr>
                                <td><p>Phone *</p></td>
                                <td>
                                
                                   <input class="span12" type="text" id="phone" name="phone" value="" placeholder=""> 
                               </td>
                                </tr>
                            
                            
                            
                            
                            <tr>
                                <td><p>Message</p></td>
                                <td>
                                
                                           
                                    <textarea class="span12" name="msg" id="msg"  rows="2" cols="4"  value="" placeholder=""></textarea>
                              </td>
                                </tr>
                            <style>
							table, th, td {
    border:none; 
}
th, td {
padding:0;
color:#000;
vertical-align: middle;
}
table p{
font-size:14px;
padding-top:10px;
}

							</style>
                                
                                <tr><td></td><td style="padding-top:1em;">
                                <p class="last">
                                    <input type="submit"  class="btn btn-primary"  name="contact_submit"  id="submit" value="Submit" >
                                </p></td></tr></table>
                                </form>
 <?php /*?><?php require_once("includes/contact.php");?>  <?php */?>                      
                        
            		</div>
                    </div>
                    </div>
                    
                 
                  
                   
            
                  
            </div>
<script language="javascript">
		  function valid2()
		  {
		  var f = document.contact_F;
		
		 var letter = /^[A-Za-z. ]+$/;
		  if(f.name.value==''){
		  alert("Please Enter name");
		  f.name.focus();
		  return false; 
		  }
	      else if(!letter.test(f.name.value))
	 	  {
 	      alert("Please Enter only Alphabates");
 	      f.name.focus();
  	      return false;
 	      }
		  
		  if(f.email1.value==''){
		  alert("Please Enter Email");
		  f.email1.focus();
		  return false; 
		  }
		  
		  
		  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		  if(!filter.test(f.email1.value)){
		  alert("Please enter the valid email");
		  f.email1.focus();
		  return false;		
		  }
		  
		  if(f.phone.value==''){
		  alert("Please Enter Phone Number");
		  f.phone.focus();
		  return false; 
		  }
		  
		  var val = f.phone.value
          if (/^\d{10}$/.test(val)) {
          // value is ok, use it
          } else {
          alert("Invalid number; must be ten digits")
          f. phone.focus();
          return false;
          }
		  
		  
		  return true;
		  }
	</script>		
    
    
	<?php include("footer.php")?>