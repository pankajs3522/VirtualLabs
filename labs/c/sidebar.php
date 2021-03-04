<!-- SideBar Starts -->
				
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Home</li>
                                <li>
                                    <a href="index.php?dashboard=1" <?php if(isset($_GET['dashboard'])){ echo 'class="mm-active"'; } ?>>
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Dashboard
                                    </a>
                                </li>                                
                                <li <?php if(isset($_GET['prog_active'])){ echo 'class="mm-active"'; } ?>>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-light"></i>
                                        Labs
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul  <?php if(isset($_GET['prog_active'])){ echo 'class="mm-collapse mm-show"'; } ?>>
                                        <li>
                                            <a href="labs.php?id=1&prog_active=1" <?php if(isset($_GET['prog_active']) && $_GET['prog_active']==1){ echo 'class="mm-active"'; } ?>>
                                                <i class="metismenu-icon">
                                                </i>C-Programming Lab
                                            </a>
                                        </li>
										
                                    </ul>
                                </li>
								<li>
                                    <a href="godseye.php?godseye=1" <?php if(isset($_GET['godseye'])){ echo 'class="mm-active"'; } ?>>
                                        <i class="metismenu-icon pe-7s-glasses"></i>
                                        God's Eye
                                    </a>
                                </li> 
                                <li>
                                    <a href="online.php?students=1" <?php if(isset($_GET['students'])){ echo 'class="mm-active"'; } ?>>
                                        <i class="metismenu-icon pe-7s-user"></i>
                                        Students Online
                                    </a>
                                </li> 
                            </ul>
                        </div>
                    </div>
                </div>
				<!-- SideBar  Ends -->