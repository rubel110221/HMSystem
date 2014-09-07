<!DOCTYPE html>
<html>
	<head>
		<title>Make an Appointment | Welcome to SQUARE Hospital</title>
		<meta charset="utf-8"/>
		<link  rel="stylesheet" href="../css/style_others.css" />
		<link rel="shortcut icon" href="../resource/icon.ico"/>
	</head>

	<body>
		<div id="main">

			<?php
			include 'index_header.php';
			include 'index_left_menu.php';
			include 'index_right_menu.php';
			include 'footer.php';
			?>
			 
		
	
				
				<div id="sidebar-middle">
					<div class="breadcrumb">
						<a href="index.php"><h2>Create an account</h2></a>
								<h2>OR</h2>
									<h2>Log in</h2>
					</div>
					<div id="description">
						
						<table width=400 style="margin-left:20px">
						 <tr>
                          <td height="40"><b id="blood"></b>
                            <label>E-mail:</label></td>
                          <td><input type="text" name="email" size="20"/></td>
                        </tr>
 
 
                        <tr>
                          <td height="40"><b id="dist"></b>
                            <label>Password:</label></td>
                          <td><input type="password" name="password" size="20"/>
                          </td>
                        </tr>
  
                        <tr>
                          <td></td>
                          <td height="30"><input type="submit" name="submit" value="Login" />
                            <input type="reset" name="reset" value="Reset"/></td>
                        </tr>
					</table>
					</div>
				</div>
							 
				
		</div>
		
	</body>
 </html>