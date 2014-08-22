<!DOCTYPE html>
<html>

	<head>
		<title>Welcome To Admin Panel</title>
		<link rel="shortcut icon" href="resource/icon.ico"/>
		<link  type="text/css" rel="stylesheet" href="css/style.css"/>
	</head>

	<body>
		<div id="main_login">
			<div id="main_content">
				
				<div id="admin"><h1>Admin Area</h1></div>
				<div class="lg-container">	
					<form action="verrifylogin.php" id="lg-form" name="lg-form" method="post" >
						
						<div>
							<label for="username">Username:</label>
							<input type="text" name="username" id="username" placeholder="username"/>
						</div>
						
						<div>
							<label for="password">Password:</label>
							<input type="password" name="password" id="password" placeholder="password" />
						</div>
						
						<div id="button">				
							<button type="submit" id="login" style="width:65px; height:30px;">Login</button>
						</div>
						
					</form>
					
				</div>
				<div id="message"></div>
			 			 
		</div>
	</div>	
</body>
</html>	