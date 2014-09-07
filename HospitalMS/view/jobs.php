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
						<a href="index.php">Home</a>
					</div>
					<div id="description">
						<h2>Current Jobs</h2>
						 
							<table>
								<col width="500">
								<thead>
									<tr>						 
									  <th ><blockquote><h3>Title</h3></blockquote></th>
									</tr>								
								</thead>
								<tbody>
								  <?php
			include '../controller/jobs_database.php';
			?>
     									</tbody>
									</table>
					</div>
				</div>
							 
		
			</div>
		
	</body>
 </html>