<?php
include('db.ini.php');
include('auth.ini.php');
$sql = "INSERT INTO practicals(name,description,lab_id)VALUES ('".$_POST['name']."','".$_POST['description']."','".$_GET['lab_id']."')";
        mysqli_query($con, $sql);
$no=$_POST['nooftestcases'];
$id=mysqli_insert_id($con);;
?>
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
                                        <i class="pe-7s-magic-wand icon-gradient bg-mean-fruit">
                                        </i>Create Practical</div>
                                </div>
                            </div>
                        </div>
						<div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Enter the following Data:</h5>
                                        <form method="post" action="new_practical2.php">
										<input type="text" name="id" value="<?php echo $id; ?>">
										<input type="text" name="nooftestcases" value="<?php echo $no; ?>">
										<?php for($i=1;$i<=$no;$i++)
										{
										?>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="position-relative form-group"><label for="t<?php echo $i; ?>" class=""></label><input name="t<?php echo $i; ?>" id="t<?php echo $i; ?>" placeholder="Test Case<?php echo $i; ?>" type="text" class="form-control"></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="position-relative form-group"><label for="t<?php echo $i; ?>" class=""></label><input name="out<?php echo $i; ?>" id="out<?php echo $i; ?>" placeholder="Output<?php echo $i; ?>" type="text" class="form-control"></div>
                                                </div>
                                            </div>
										<?php } ?>
                                            <button  type="submit" class="mt-2 btn btn-success">Submit Test Cases</button>
                                        </form>
                                    </div>
                                </div>
                    </div> 
				</div>
				<!-- Main Document Ends-->
        </div>
    </div>
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>
