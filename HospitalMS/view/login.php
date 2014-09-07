<!DOCTYPE html>
<html>

	<head>
		<title>Welcome To Admin Panel</title>
		<link rel="shortcut icon" href="../resource/icon.ico"/>
		<link  type="text/css" rel="stylesheet" href="../css/style.css"/>
		
		<style>
		.error {color: #FF0000;}
		</style>
		
		
	</head>

	<body>
<?php
			include '../controller/login_database.php';
			?>
	
		<div id="main_login">
			<div id="main_content">
				<div id="admin"><h1>Admin Area</h1>
				</div>
			
				<div class="lg-container">	
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post" >
						<div>
							<label for="username">Username:</label>
							<input type="text" name="name" placeholder="username"/>
					
						</div>
						<div>
							<label for="password">Password:</label>
							<input type="password" name="password" placeholder="password" />

						</div>
						<div id="button">				
							<button type="submit" id="login" style="width:65px; height:30px;">Login</button>
						</div>
						
						
					</form>
				</div>
				<div id="message">
                <span class="error"><?php echo  $messErr; ?></span>
				</div>
			 			 
		</div>
	</div>

</body>
</html>	