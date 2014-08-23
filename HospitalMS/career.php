<!DOCTYPE html>
<html>

	<head>
		<title>Welcome To Square Hospital</title>
		<link rel="shortcut icon" href="resource/icon.ico"/>
		<link  type="text/css" rel="stylesheet" href="css/style.css"/>
		<link  type="text/css" rel="stylesheet" href="css/New_Post_Css.css"/>
		
	</head>

	<body>
		<div id="main_carer">
			 <?php include 'headerAdmin.php';?>
			 <?php include 'side_menuAdmin.php';?>
			 
			<div id="physicians">
				   <h3>Post New Job:</h3>
					<label for="Job">Job Title :</label><br/>
					<input   type="text" name="name"  id="Job" style="width: 250px;" /><br/>
					<label for="Reference">Reference :</label><br/>
					<input   type="text" name="text"  id="Reference" style="width: 250px;" /><br/>
					<label for="Location">Location :</label><br/>
					<input   type="text" name="text"  id="Location" style="width: 250px;" /><br/>
					 
					<label for="deadline">Application deadline :</label><br/>
					<input   type="text" name="text"  id="deadline" style="width: 250px;" /><br/>
		
					<label for="Description">General Description :</label><br/>
					<textarea  id="Description" name="comments" cols="54" rows="8">
					</textarea><br/>
					 <label for="Vacancy">Available Vacancy:</label><br/>
					<input   type="text" name="text"  id="Vacancy" style="width: 250px;" /><br/>
					
					<label for="Requirements">Requirements :</label><br/>
					<textarea  id="Requirements" name="comments" cols="54" rows="8">
					</textarea><br/>
					<label for="Addressed">Addressed to :</label><br/>
					<textarea  id="Addressed" name="comments" cols="54" rows="8">
					</textarea><br/>
					
					 <button type="submit">Submit</button>
				
			</div>
		</div>	
	</body>
</html>	