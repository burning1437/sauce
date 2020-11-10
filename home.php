<!DOCTYPE html>
<?php
	require_once 'validator.php';
	require_once 'account.php'; 
?>
<html lang = "eng">
	<head>
		<title>Attendance Monitoring System</title>
	
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" href = "css/bootstrap.css" />
	</head>
	<body>
	<body style= "background-color:green;">
		<nav class = "navbar navbar-inverse">
			<div class = "container-fluid">
				<div class = "navbar-header">
					<img src = "images/sjc2.jpg" width = "200px" height = "200px"/>
					<img src = "images/boss.png" width = "1100px" height = "200px"/>
				</div>
				<ul class = "nav navbar-nav navbar-right">
					<li class = "dropdown">
						<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown"><i class = "glyphicon glyphicon-user"></i> <?php echo htmlentities($admin_name)?> <b class = "caret"></b></a>
						<ul class = "dropdown-menu">
						<li><a href = "homes.php"><i class = "glyphicon glyphicon-home"></i> Home</a></li>
							<li><a href = "admin.php"><i class = "glyphicon glyphicon-user"></i> Admin</a></li>
							<li><a href = "student.php"><i class = "glyphicon glyphicon-user"></i> Student</a></li>
							<li><a href = "record.php"><i class = "glyphicon glyphicon-list-alt"></i> AttendanceRecord</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<div class = "container-fluid" style = "margin-top:70px;">
			<ul class = "nav nav-pills">
				<li class = "active"><a href = "home.php"><span class = "glyphicon glyphicon-home"></span> Home</a></li>
				<li class = "dropdown">
					<a class = "dropdown-toggle" data-toggle = "dropdown" href = "#"><span class = "glyphicon glyphicon-cog"><span style="color:white;font-weight:bold">Accounts</span><span class = "caret"></span></a>
					<ul class = "dropdown-menu">
						<li><a href = "admin.php"><span class = "glyphicon glyphicon-user"></span> Admin</a></li>
						<li><a href = "student.php"><span class = "glyphicon glyphicon-user"></span> Student</a></li>
					</ul>
				</li>
				<li><a href = "record.php"><span class = "glyphicon glyphicon-book"></span> <span style="color:white;font-weight:bold">AttendanceRecord</span> </a></li>
			</ul>
			<br />
			<div class = "alert alert-info">Home</div>
			<div class = "well col-lg-12">
				<img src = "images/sjc2.jpg" width = "1500px"; />
			<br />
			<br />	
			<br />	
			</div>
		</div>
	
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	
</html>