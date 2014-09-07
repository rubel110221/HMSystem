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
		<link  type="text/css" rel="stylesheet" href="css/style.css"/>
		<link  type="text/css" rel="stylesheet" href="css/New_Post_Css.css"/>
	</head>

	<body>
		<div id="main_ac_setting">
			<?php include 'headerAdmin.php';?>
			 <?php include 'side_menuAdmin.php';?>
			 
			 <div id="ac_setting">
				<div id="personal_info">
					<h4>Personal Information:</h4>
					<label for="name">Change Name :</label><br/>
					Profile Picture  :
					<h4>Change Password:</h4>
					<label for="new_pass">New Password :</label><br/>
					<label for="con_pass">Confirm New Password :</label><br/>
					<label for="cur_pass">Current Password :</label><br/>	
				</div>
						
				<div class="change_pw">
					<br/><br/>
					<input type="text" id="name" /><br/>	
                    <input type="file" name="upload_pic"/><br/><br/><br/>			
					
					<input type="text" id="new_pass" /><br/>
					
					<input type="text" id="con_pass" /><br/>
					
					<input type="text" id="cur_pass" /><br/>
					
				</div>
				
				<div id="button">
				
					<button type="submit"   >Submit</button>
					<button type="submit"  >Cancel</button>
				</div>
			
			 </div>
			 
		</div>
</body>
</html>	