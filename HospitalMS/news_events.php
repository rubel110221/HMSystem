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
				
				    <h3>Post New News & Events :</h3>
					<label for="Job">News or Events Title :</label><br/>
					<input   type="text" name="name"  id="Job" style="width: 250px;" /><br/>
						<label for="Job">Types Of  News & Events :</label><br/>
					<select>
						<option value="">Archive News</option>
						<option value="">Messages</option>
						<option value="">Notice</option>
						<option value="">Press Released</option>
						<option value="">Advertisement</option>
						<option value="">News Letters</option>
					</select><br/>
					<label for="Description">General Description :</label><br/>
					<textarea  id="Description" name="comments" cols="54" rows="10">
					</textarea><br/>
					 <button type="submit">Submit</button>
				
			</div>



		</div>
		
			
	</body>
</html>	