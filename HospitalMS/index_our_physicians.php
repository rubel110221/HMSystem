<!DOCTYPE html>
<html>
	<head>
		<title>Physicians | Welcome to SQUARE Hospital</title>
		<meta charset="utf-8"/>
		<link  rel="stylesheet" href="css/style_others.css" />
		<link rel="shortcut icon" href="resource/icon.ico"/>
	</head>

	<body>
		<div id="main">
		
			<?php
			include 'index_header.php';
			include 'index_left_menu.php';
			include 'index_right_menu.php';
			include 'footer.php';
			?>
				
				<div id="sidebar-middle1">
					<div class="breadcrumb">
						<a href="index.php">Home</a>
					</div>                              
					<div id="description">
						<h2>Our Physicians</h2>
						<div class="view-content">
						
						
							<table>
								<col width="160">
  								<col width="130">
  								<col width="120">
								<thead>
									<tr>
									  <th class="views-field views-field-field-photo-fid"></th>							 
									  <th class="views-field views-field-title">Name</th>
									  <th class="views-field views-field-field-designation-value">Designation</th>
									  <th class="views-field views-field-field-category-discipline-nid">Department</th>
									</tr>								
									</thead>
								<tbody>
									<?php 	
										mysql_connect('localhost','root','') or die(mysql_error());
     									mysql_select_db("square_database" );

     									$query = "SELECT * FROM physicians";
     									$result = mysql_query($query);

     									$oddEven=0;
     									while($row = mysql_fetch_array($result))
     									{
     										if($oddEven%2==0)
     										{
     											echo "<tr class='odd'>";
     											//echo "<td>"."<img width='67' height='100'  src='../resource/bg_movie.jpg'/>"."</td>";
     											//$data = base64_decode($row[0]);
     										//$imageData = $row['picture_data'];
     										//echo $imageData;
     											//echo "<td>".$data."</td>";
     										//echo"<img src=index_our_physicians.php?id='6' width=200 height=150 border=0>";

     											$title=$row['name'];
												echo "<td>"."<a href='' title='$title'>".$row['name']. "</a>"."</td>";
												echo "<td>".$row['designation']."</td>";
												echo "<td>".$row['department']."</td>";
												echo "</tr>";
												$oddEven++;
     										}
     										else
     										{
     											echo "<tr class='even'>";
     											//echo "<td>"."<img width='67' height='100' alt="" src='resource/Physicians/sh.jpg' />"."</td>";
     											$title=$row['name'];
												echo "<td>"."<a href='' title='$title'>".$row['name']. "</a>"."</td>";
												echo "<td>".$row['designation']."</td>";
												echo "<td>".$row['department']."</td>";
												echo "</tr>";
												$oddEven++;
     										}
     									}

     									?>
     									</tbody>
									</table>
     									
						</div>
					</div>
				</div>
		</div>

	</body>
 </html>