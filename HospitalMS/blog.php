<!DOCTYPE html>
<html>

	<head>
		<title>Welcome To Square Hospital</title>
		<link rel="shortcut icon" href="resource/icon.ico"/>
		<link  type="text/css" rel="stylesheet" href="css/style.css"/>
		<link  type="text/css" rel="stylesheet" href="css/New_Post_Css.css"/>
		
	</head>

	<body>
		<div id="main_news_events">
			 <?php include 'headerAdmin.php';?>
			 <?php include 'side_menuAdmin.php';?>
			 
			<div id="news_events">
				
				    <h3>Post New Blog :</h3>
					<label for="Job">Title :</label><br/>
					<input   type="text" name="name"  id="Job" style="width: 250px;" /><br/>
					<label for="Job">Category :</label><br/>
					<form action="">
						<input type="checkbox" name="vehicle" value="Bike">Human Resources<br/>
						<input type="checkbox" name="vehicle" value="Car">Marketing and Business Development<br/>
						<input type="checkbox" name="vehicle" value="Bike">Medical Services<br/>
						<input type="checkbox" name="vehicle" value="Bike">News<br/>
						</form>
					<label for="Description">General Description :</label><br/>
					<textarea  id="Description" name="comments" cols="54" rows="10">
					</textarea><br/>
					Upload a picture:				
					<input type="file" name="upload_pic"/><br/><br/>
					
					 <button type="submit">Submit</button>
				
			</div>



		</div>
		
			
	</body>
</html>	