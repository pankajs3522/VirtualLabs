<?php include('db.ini.php'); include('auth.ini.php');  ?>
<!doctype html>
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
                                        <i class="pe-7s-glasses icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>God's Eye
									
                                    </div>
									
                                </div>
								<div class="dropdown btn-actions-pane-right">
												<button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-success">Select Student</button>
												<div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 32px, 0px);">
													<button type="button" tabindex="0" class="dropdown-item">Student 1</button>
													
													<button type="button" tabindex="0" class="dropdown-item">Student 2</button>
													
												</div>
											</div>
                                    </div>
                        </div>
						<div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <iframe class="d-block w-100" height="500" src="http://sourceplace.xyz"></iframe>
                                                </div>
                                                <div class="carousel-item">
                                                    <iframe class="d-block w-100" height="500" src="https://theencryptedone.com/quotes.html"></iframe>
                                                </div>
                                                
                                            </div>
                                            <a class="carousel-control-prev" style="background:grey" href="#carouselExampleControls1" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="false"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" style="background:grey" href="#carouselExampleControls1" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                    </div> 
				</div>
				<!-- Main Document Ends-->
        </div>
    </div>
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>
