<?php
include('db.ini.php');
include('auth.ini.php');
$sql = "INSERT INTO test_cases(p_id,size_of_test_cases)VALUES ('".$_POST['id']."','".$_POST['nooftestcases']."')";
        mysqli_query($con, $sql);
		mkdir("test_cases/".$_POST['id'],0777,true);
for($i=1;$i<=$_POST['nooftestcases'];$i++)
{
	$tt='t'.$i;
	$sql2= ' UPDATE test_cases SET t'.$i.'="'.$_POST[$tt].'" WHERE p_id='.$_POST['id'];
            mysqli_query($con, $sql2);
			$myfile = fopen("test_cases/".$_POST['id']."/t".$i.".txt", "w") or die("Unable to open file!");
			fwrite($myfile, $_POST[$tt]);
			fclose($myfile);
	$tt='out'.$i;
	$sql= ' UPDATE test_cases SET out'.$i.'="'.$_POST[$tt].'" WHERE p_id='.$_POST['id'];
            mysqli_query($con, $sql);
			//echo $sql;
}
header('location:  labs.php?id=1&prog_active=1&success=1');
?>