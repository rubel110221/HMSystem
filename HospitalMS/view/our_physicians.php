
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
		<div id="main_pshysican">
			  
			 <?php include 'headerAdmin.php';?>
			 <?php include 'side_menuAdmin.php';?>
					 
			<div id="physicians">
				    <h3>Post New Physicians :</h3>
					<label for="name">Name :</label><br/>
				<form action="../view/our_physicians.php" method="POST" enctype="multipart/form-data">
					<input   type="text" name="name"  id="name" style="width: 250px;" /><br/>
					<label for="Designation">Designation :</label><br/>
					<input   type="text" name="designation"  id="Designation" style="width: 250px;" /><br/>
					<label for="Department">Department :</label><br/>
					<select  name="department" style="width: 250px;">
						 <option>Anaesthesiology</option>
						<option>Cardiac & Vascular Surgery</option>
						<option>Cardiology</option>
						<option>Cardiology (Interventional)</option>
						<option>Chest</option>
						<option>Clinical Haematology</option>
						<option>Dental Care</option>
						<option>Dermatology</option>
						<option>Emergency (ER)</option>
						<option>Endocrinology</option>
						<option>ENT and Head & neck Surgery</option>
						<option>Executive Health Check Up</option>
						<option>Gastroenterology</option>
						<option>General Surgery</option>
						<option>ICU</option>
						<option>Internal Medicine</option>
						<option>Internal Medicine & Critical Care </option>
						<option>Internal Medicine & ICU</option>
						<option>Internal Medicine & Rheumatology</option>
						<option>IVF (Square Fertility Centre)</option>
						<option>Neonatology (NICU)</option>
						<option>Nephrology</option>
						<option>Neuro Surgery</option>
						<option>Neurology</option>
						<option>OBGYN</option>
						<option>Oncology</option>
						<option>Ophthalmology</option>
						<option>Oral, Maxillofacial & Orthodontics</option>
						<option>Orthopedics</option>
						<option>Pathology & Laboratory Medicine</option>
						<option>Pediatric & Pediatric Oncology</option>
						<option>Pediatric Surgery</option>
						<option>Pediatrics</option>
						<option>Physical Medicine</option>
						<option>Psychiatry</option>
						<option>Radiology</option>
						<option>Urology</option>
					</select><br/>
					<label for="Degree">Degree/Qualification :</label><br/>
					<input   type="text" name="degree"  id="Degree" style="width: 250px;" /><br/>
					<label for="Experience">Experience :</label><br/>
					<input   type="text" name="experience"  id="Experience" style="width: 250px;" /><br/>
					<label for="Description">General Description :</label><br/>
					<textarea  id="Description" name="description" cols="54" rows="10">
					</textarea><br/>
					Upload a picture:				
					<input type="file" name="image"/><br/><br/>
					<input type="submit" name="submit" value="submit">
				</form>
	<?php
			include '../controller/physicians_database.php';
			?>

			</div>



		</div>
		
			
	</body>
</html>	