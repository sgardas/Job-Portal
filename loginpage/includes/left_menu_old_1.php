<div class="left side-menu">
<div class="sidebar-inner slimscrollleft">
	
    <!-- Search form -->
	<form role="search" class="navbar-form">
                    <div class="form-group">
                        <input type="text" placeholder="Search" class="form-control">
                        <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                    </div>
	</form>
	
    <div class="clearfix"></div>

		<!--- Profile -->



<div id="sidebar-menu">

    <?php if($_SESSION['_SESS_USERID'] == 1)  { ?>

<ul>

            <li><a href='viewprofile.php?id=<?php echo base64_encode($_SESSION['_SESS_USERID']); ?>"' class='active'><span>My Profile</span></a></li>
            
                       <li><a href='headerpage.php?id=<?php echo base64_encode(1); ?>' ><span>Home Details</span></a></li>

            <li><a href='headerpage.php?id=<?php echo base64_encode(2); ?>'><span>About Us  Details</span></a></li>

            <li><a href='headerpage.php?id=<?php echo base64_encode(3); ?>' ><span>Locations Details</span></a></li>
            
              <li><a href='dynamicpages.php?id=<?php echo base64_encode(4); ?>' ><span>Gallery</span></a></li>
              


        </ul>
        


<?php } ?>

  </li>
   </ul>
   
   <div class="clearfix"></div>
</div>






<div class="clearfix"></div>
            
            <div class="clearfix"></div><br><br><br>
        </div>
            
        </div>