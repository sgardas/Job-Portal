<div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">
								<!-- Page Heading Start -->
				<div class="page-heading">
            		<h1><i class='fa fa-table'></i> All Home Details</h1> 
            		           	</div>
            	<!-- Page Heading End-->				<!-- Your awesome content goes here -->
				<div class="row">
				
					<div class="col-md-12">
						<div class="widget">
							<div class="widget-header">
								<h2><strong>View / Edit / Delete</strong> Home</h2>
								<div class="additional-btn">
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
								</div>
							</div>
							<div class="widget-content">
							<br>					
								<div class="table-responsive">
									<form class='form-horizontal' role='form'>
									<table id="datatables-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
									        <thead>
<tr>
                <td colspan="9"><table width="100%" border="0" bordercolor="#999999" cellspacing="4" cellpadding="0" class="txt border_table">
           <tr>
            	<td align="right" class="link3"><?php drawNavigation2($start,$total,'viewedithome.php?roleid=1',$len) ?></td>
            </tr>
            </table></tr>                                            
									            <tr>
									                <th>Sl No</th>
                                                    <th>Heading Name</th>
                                                 	<th>Created Date</th>
                                                    <th>Modified Date</th>
									                <th>Status</th>
                                                    <th>Edit </th>
                                                    <th>Delete </th>
									            </tr>
									        </thead>
<?php if($total > 0){ 
$i = $start+1;
while($searchfetch = $db->fetchArray($searchqry))
{
	if($searchfetch['head_status'] == '1'){
		$class = 'label label-success';
		$status= 'Active';
	}else {
		$class = 'label label-danger';
		$status= 'De - Active';
	}
?>								        <tbody>
									            <tr>
									                <td><?php echo $i; ?></td>
									                <td><?php echo $searchfetch['head_name']; ?></td>
                                                    <td><?php echo getDateFormat($searchfetch['createdDate']); ?></td>
                                                    <td><?php echo getDateFormat($searchfetch['modifiedDate']); ?></td>
                                                    <td><span class="<?php echo $class; ?>"><?php echo $status; ?></span></td>
									                <td><div class="btn-group btn-group-xs">
                                                    <a href="addedithome.php?id=<?php echo base64_encode($searchfetch['home_id']); ?>" class="btn btn-default edit" title="" data-toggle="tooltip" data-original-title="Edit">
                                                    <i class="fa fa-edit"></i> Edit </a>
                                        <?php /*?>           <a href="vieweditblog.php?delid=<?php echo base64_encode($searchfetch['home_id']); ?>" class="btn btn-default delete" title="" data-toggle="tooltip" data-original-title="Delete">
                                                    <i class="fa fa-power-off"></i> Delete                                                    </a>
                                                    </div><?php */?>
                                                    <td><a href="delete_blog.php?id=<?php echo $searchfetch['home_id']; ?>" onclick="return confirm('Do you really want to delete file')">
                									<img src="images/delete.gif"></a></td>
                                                    </td>                                                    
									            </tr>
                    <?php
			$i++; 
			} 
		  ?>
									        </tbody>
<tr>
                <td colspan="9"><table width="100%" border="0" bordercolor="#999999" cellspacing="4" cellpadding="0" class="txt border_table">
           <tr>
            	<td align="right" class="link3"><?php drawNavigation2($start,$total,'viewedithome.php?roleid=1',$len) ?></td>
            </tr>
            </table>            </td>
            </tr>
<tr>
                <td colspan="9"><table width="100%" border="0" bordercolor="#999999" cellspacing="4" cellpadding="0" class="txt border_table">
                    <tr>
                      <td colspan="2" width="58%" align="center" class="link3"><p>To add <strong>New Home Details</strong> please click here <a class="loginsde" href="addeditblog.php">Add</a></p></td>
                    </tr>
                  </table></td>
              </tr>			<?php }  else { ?>                                        
<tr>
                <td colspan="9"><table width="100%" border="0" bordercolor="#999999" cellspacing="4" cellpadding="0" class="txt border_table">
                    <tr>
                      <td  colspan="1" width="42%" align="center"><h3  class="datanotavalilabie2 datanotavalilabie3">Data Not Available</h3></td>
                      <td colspan="1" width="58%" align="center" class="link3"><p>To add <strong>New Home Details</strong> please click here <a class="loginsde" href="addeditblog.php">Add</a> <br />
                          <br />
                          <span class="or">Or</span> <br />
                          <br />
                          Go Back to <strong>Home Page</strong> please click here <a class="loginsde" href="home.php">Home</a></p></td>
                    </tr>
                  </table></td>
              </tr><?php } ?>                
									    </table>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>

				
				
				
				            <!-- Footer Start -->
            
     
<?php include("includes/footer.php") ?>

           <!-- Footer End -->			
            </div>
			<!-- ============================================================== -->
			<!-- End content here -->
			<!-- ============================================================== -->

        </div>