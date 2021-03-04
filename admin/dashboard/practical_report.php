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
                                    <div>Report : Practical-<?php echo $_GET['id']; ?>
									
                                    </div>
									
                                </div>
                            </div>
                        </div>
						<div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Student Details</h5>
                                        <table class="mb-0 table table-hover">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Marks</th>
												<th>No. of Test Cases Passed</th>
                                            </tr>
                                            </thead>
                                            <tbody>
											<?php
$query = "SELECT * FROM practicals_completed where p_id=".$_GET['id'];
							//echo $query;
							$result = mysqli_query($con,$query) or die(mysqli_error($con));
							if(mysqli_num_rows($result)==0)
							{
								echo "No Details Available!";
								
							}
							else
							{
								while($roww = mysqli_fetch_array($result))
										{
											$query2 = "SELECT * FROM users where id=".$roww['s_id'];
							//echo $query;
							$result2 = mysqli_query($con,$query2) or die(mysqli_error($con));
							$roww2 = mysqli_fetch_array($result2);
											?>
                                            <tr>
                                                <th scope="row"></th>
                                                <td><?php echo $roww['name']; ?></td>
                                                <td><?php echo ($roww['test_cases_passed']/$roww['total_test_cases'])*100; ?></td>
												<td><?php echo $roww['test_cases_passed']; ?></td>
                                            </tr>
							<?php } }?>
                                            </tbody>
                                        </table>
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
