<?php 
session_start();
if(!isset($_SESSION['username']) && !isset($_SESSION['password']))
header("location:login.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Welcome To Square Hospital</title>
		<link rel="shortcut icon" href="resource/icon.ico"/>
		<link  type="text/css" rel="stylesheet" href="../css/style.css"/>
		<link  type="text/css" rel="stylesheet" href="../css/New_Post_Css.css"/>
	</head>
	<body>
		
		
		<div id="main">
			 <?php include 'headerAdmin.php';?>
			 <?php include 'side_menuAdmin.php';?>
			 <?php include 'appointment_list.php';?>
		</div>		
	</body>
</html>

