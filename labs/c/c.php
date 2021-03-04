<?php include('db.ini.php'); ?>
<html>
<head>
<title>C Programming - VLab</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../style.css">
</head>
<body>
<div class="header">
e-Lab(C Programming)
<span style="float:right">
	<input type="button" value="Home" onclick='location.replace("index.htm")' class="btn" style="background-color:#007E33">
	<input type="button" value="Previous Sessions" onclick='location.replace("presvious_sessions.htm")' class="btn" style="background-color:#007E33">
	<input type="button" value="My Account" onclick='location.replace("../../accounts/myaccount.htm")' class="btn" style="background-color:#007E33">
	<input type="button" value="Logout" onclick='location.replace("../../logout.php")' class="btn" style="background-color:#007E33">
</span>
</div>
<div class="content" style="margin-left:2%;overflow:none;max-width:95%;">
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
								while($roww = mysqli_fetch_array($result))
										{
											
											if($w%3==0){
											?>
	<div class="card-deck">
											<?php } $w++; ?>
		<div class="card" onclick='window.open("practical.php?task=<?php echo $roww['id']; ?>","_parent")'>
			<div class="card-body">
			<?php echo $roww['name']; ?><br><br>
			
			<font style="font-size:70%"><?php echo $roww['description']; ?></font>
			</div>
		</div>
		<?php
		if(($w-1)%3==0){
			?>
	</div>
	<br>
							<?php } } } ?>
	
	
</div>
<?php
if(isset($_GET['su']))
{
	?>
	<script language="javascript">
	alert("Submission Successful");
	</script>
<?php } ?>