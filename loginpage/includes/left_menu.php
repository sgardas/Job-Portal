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
	
    <ul>
    
    <li class='has_sub'><a href='javascript:void(0);' class='active'><i class='icon-home-3'></i><span>Dashboard</span> <span class="pull-right">
    <i class="fa fa-angle-down"></i></span></a>
   
    </li>
    
      <?php if($_SESSION['_SESS_USERID'] == 1)  { ?>
    <li class='has_sub'><a href='javascript:void(0);'><i class='fa fa-table'></i><span>Companies List</span> <span class="pull-right">
        <i class="fa fa-angle-down"></i></span></a>
        <ul>
            <li><a href='addeditjobs.php'><span>Add New Companies List</span></a></li>
            <li><a href='vieweditjob.php'><span>View / Edit Companies List</span></a></li>
    	</ul>
    </li>
   
 
    
    
   
    
    
<?php } ?>



  </ul></li>
    
    
   
   </ul>
   
   <div class="clearfix"></div>
</div>






<div class="clearfix"></div>
            
            <div class="clearfix"></div><br><br><br>
        </div>
            
        </div>