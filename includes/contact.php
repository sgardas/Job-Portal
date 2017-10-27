
<script>
function valid(){
var f = document.form_F;
var letter = /^[A-Za-z. ]+$/;

if(f.name_f.value==''){
alert("Please Enter Name");
f.name_f.focus();
return false;
}
else if(!letter.test(f.name_f.value))
	 	  {
 	      alert("Please Enter only characters");
 	      f.name_f.focus();
  	      return false;
 	      }
 else if (f.name_f.value.length>50){
		  alert("Name cannot be more than 50 characters");
		  f.name_f.focus();
		  return false;
		  }	
		  
var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;		  	  
if(f.email_f.value== ''){
alert("Please Enter Your EmailID");
f.email_f.focus();
return false;
}
if(!filter.test(f.email_f.value)){
		  alert("Please enter the valid email");
		  f.email_f.focus();
		  return false;		
		  }
if(f.phone_f.value== ''){
alert("Please Enter Your Phone Number");
f.phone_f.focus();
return false;
}
  var val = f.phone_f.value
          if (/^\d{10}$/.test(val)) {
          // value is ok, use it
          } else {
          alert("Invalid number; must be ten digits")
          f. phone_f.focus();
          return false;
          }



if(f.message_f.value== ''){
alert("Please Enter Your Message");
f.message_f.focus();
return false;
}


	  
return true;
}

</script>

                      <form name="form_F" method="post" action="sendmail.php" onsubmit="javascript: return valid();">  
                            <fieldset>
                                <div id="formstatus"></div>
                                <p>
                                    <input class="span12" type="text" id="name_f" name="name_f" value="" placeholder="Name">
                                </p>
                            
                                <p>
                                   <input class="span12" type="text" id="email_f" name="email_f" value="" placeholder="Email"> 
                                </p>
                                <p>
                                   <input class="span12" type="text" id="phone_f" name="phone_f" value="" placeholder="Phone"> 
                                </p>
                                <p>
                                    <textarea class="span12" id="message_f" name="message_f" rows="2" cols="4" placeholder="Message"></textarea>
                                </p>
                                <p class="last">
                                    <input id="submit" type="submit" name="submit" value="Submit" >
                                </p>
                            </fieldset>
                        </form><!-- end #contact-form -->


