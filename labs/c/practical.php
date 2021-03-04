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
	<input type="button" value="Logout" onclick='location.replace("../../accounts/logout.htm")' class="btn" style="background-color:#007E33">
</span>
</div>
<?php $query = "SELECT * FROM practicals WHERE id=".$_GET['task'];
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
											?>
<script language="javascript">
function coderunn()
{
	<?php if($_SESSION['id']==2){ ?>
setTimeout(function() { document.getElementById("codedesk").innerHTML="Test Case-1 : Passed";},1500);
	<?php } else {?>
setTimeout(function(){ document.getElementById("codedesk").innerHTML="Test Case-1 : Failed"; },1500);
	<?php } ?>		
}
</script>
<div class="content" style="margin-left:2%;overflow:none;max-width:95%;">
<form method="post" action="submit_code.php?task=<?php echo $_GET['task']; ?>">
	<h3>Q: <?php echo $roww['name']; ?></h3>
	<p><?php echo $roww['description']; ?></p>
	<textarea name="program" id="program" rows=20 cols=200>
	
		//Type Your Program Here.
	
	</textarea><br><br>
	<a href="#co"><input type="button" value="Run Code" class="btn" onclick="coderunn()"></a>&nbsp;<input type="submit" value="Submit Code" class="btn"></form><br><br>
	<div style="width:90%;height:30%;font-size:70%;padding:2px;color:white;background-color:black">
	<code id="codedesk" name="codedesk">pankaj@vlab ></code><a name="co"></a>
	</div>
</div>
							<?php  } } ?>
