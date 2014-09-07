
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
		<style>
		.error {color: #FF0000;}
		.success {color: green;}
		</style>
	</head>

	<body>
		<div id="main_carer">
			 <?php include 'headerAdmin.php';?>
			 <?php include 'side_menuAdmin.php';?>
			 
			<div id="physicians">
				   <h3>Post New Job:</h3>
					<label for="Job">Job Title :</label><br/>
				<form action="career.php" method="POST" enctype="multipart/form-data">	
					<input   type="text" name="title"  id="Job" style="width: 250px;" /><br/>
					<label for="Reference">Reference :</label><br/>
					<input   type="text" name="reference"  id="Reference" style="width: 250px;" /><br/>
					<label for="Location">Location :</label><br/>
					<input   type="text" name="location"  id="Location" style="width: 250px;" /><br/>
					 
					<label for="deadline">Application deadline :</label><br/>
					<input   type="text" name="deadline"  id="deadline" style="width: 250px;" /><br/>
					<label for="Vacancy">Available Vacancy:</label><br/>
					<input   type="text" name="vacancy"  id="Vacancy" style="width: 250px;" /><br/>
					
		
					<label for="Description">General Description :</label><br/>
					<textarea  id="Description" name="description" cols="54" rows="8">
					</textarea><br/>
					
					<label for="Requirements">Requirements :</label><br/>
					<textarea  id="Requirements" name="requirement" cols="54" rows="8">
					</textarea><br/>
					<label for="Addressed">Addressed to :</label><br/>
					<textarea  id="Addressed" name="address" cols="54" rows="8">
					</textarea><br/>
					
					<input type="submit" name="submit" value="submit">
				</from>




<?php
			include '../controller/career_database.php';
			?>
			</div>
		</div>	
	</body>
</html>	