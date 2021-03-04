<?php
include('db.ini.php');
$sql = "INSERT INTO practicals_completed(p_id,s_id,test_cases_passed,total_test_cases)VALUES (1,2,1,1)";
        mysqli_query($con, $sql);
		header("location: c.php?su=1&id=1");
?>
