<?php include('db.ini.php');  include('auth.ini.php'); ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>vLabs  -  Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
<link href="./main.css" rel="stylesheet"></head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
<?php include('top.php'); ?>

        <div class="app-main">
		
				<?php include('sidebar.php'); ?>
				
				<!-- Main Document Starts -->
				<div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-magic-wand icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>C-Programming Lab
                                    </div>
                                </div>
                                    </div>
                        </div>
						<?php $query = "SELECT * FROM practicals WHERE lab_id='".$_GET['id']."'";
							//echo $query;
							$result = mysqli_query($con,$query) or die(mysqli_error($con));
							$w=0;
							if(mysqli_num_rows($result)==0)
							{
								echo "No Practicals Available";
								
							}
							else
							{
								?>
								<div class="row">
								<?php
								while($roww = mysqli_fetch_array($result))
										{
											
											?>
						
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3">
                                    
                                            <div class="card-header"><?php echo $roww['name']; ?> 
												<div class="dropdown btn-actions-pane-right">
												<button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-success">More</button>
												<div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 32px, 0px);">
													<button type="button" tabindex="0" class="dropdown-item">Edit</button>
													
													<button type="button" tabindex="0" class="dropdown-item">Remove</button>
													
												</div>
											</div>
										</div>
                                            <div class="card-body scroll-area-sm" onclick='window.open("practical_report.php?id=<?php echo $roww['id']; ?>","_parent")'>
											<div class="scrollbar-container ps--active-y ps">
												<?php echo $roww['description']; ?>
												</div>
                                            </div>
												<div class="mb-3 progress">
													<div class="progress-bar bg-success" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
												</div>
											</div>
                            </div>
                            
                            
                            
                        
							<?php } } ?>
							<div class="col-md-6 col-xl-4">
                                <div class="card mb-3 bg-grow-early scroll-area-sm">
                                <br><br><br>
                                                <button class="btn" style="color:white" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus" style="color:white"></i><br>New Practical</button>
                                
                                <br><br>  
                                </div>
                            </div>
							</div>
                    </div> 
					
				</div>
				
				<!-- Main Document Ends-->
        </div>
    </div>
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>
<!-- Large modal -->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">New Practical</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <form method="post" action="new_practical.php?lab_id=<?php echo $_GET['id']; ?>">
                                            <div class="position-relative row form-group"><label for="Name" class="col-sm-2 col-form-label">Name</label>
                                                <div class="col-sm-10"><input required name="name" id="Name" placeholder="e.g., Print Hello World" type="text" class="form-control"></div>
                                            </div>
                                            
                                            <div class="position-relative row form-group"><label for="description" class="col-sm-2 col-form-label">Description</label>
                                                <div class="col-sm-10"><textarea required name="description" id="description" class="form-control"></textarea></div>
                                            </div>
                                            
											<div class="position-relative row form-group"><label for="size" class="col-sm-2 col-form-label">No.of Test Cases</label>
                                                <div class="col-sm-10"><input required type="number" name="nooftestcases" id="size" min=1 max=7 class="form-control"></select></div>
                                            </div>
                                        
                                    </div>
                                </div></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success">Continue</button>
				</form>
            </div>
        </div>
    </div>
</div>
