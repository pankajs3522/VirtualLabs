<html>
<head>
<title>Labs e-Class</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
e-Class.com
<span style="float:right">
	<input type="button" value="Home" onclick='location.replace("dashboard.php")' class="btn" style="background-color:#007E33">
	<input type="button" value="Class" onclick='location.replace("class.php")' class="btn" style="background-color:#007E33">
	<input type="button" value="Labs" class="btn">
	<input type="button" value="Groups" onclick='location.replace("groups.php")' class="btn" style="background-color:#007E33">
	<input type="button" value="My Account" onclick='location.replace("myaccount.php")' class="btn" style="background-color:#007E33">
</span>
</div>
<div class="content" style="margin-left:2%;overflow:none;max-width:95%;">
	<div class="card-deck">
		<div class="card" onclick='window.open("labs/c/c.php?id=1")'>
			<div class="card-body">
			C Programming Lab
			</div>
		</div>
		<div class="card">
			<div class="card-body">
			Lab 2
			</div>
		</div>
		<div class="card">
			<div class="card-body">
			Lab 3
			</div>
		</div>
	</div>
	<br>
	<div class="card-deck">
		<div class="card">
			<div class="card-body">
			Lab 4
			</div>
		</div>
	</div>
</div>