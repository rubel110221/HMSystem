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
			include '../view/index_header.php';
			include '../view/index_left_menu.php';
			include '../view/index_right_menu.php';
			include '../view/footer.php';
			?>
			 
				<div id="sidebar-middle">
					<div class="breadcrumb">
						<a href="index.php">Home</a>
					</div>
					<div id="appointment">
						<h2>Make An Appointment</h2>

						<span><strong>
					    <a href="http://24timezones.com/world_directory/current_dhaka_time.php" style="text-decoration: none" target="_BLANK" title="correct time Dhaka">Time in Bangladesh</a> - <span id="tzTimeSpan_ee540a99fcef176"></span>
					    <script type="text/javascript" src="http://24timezones.com/js/en/time_12_1_1.js"></script>
					    <script src="http://24timezones.com/timescript/gettime.js.php?city=73&hourtype=12&showdate=1&showseconds=1&id=1836229&elem=ee540a99fcef176" language="javascript"></script>
						</strong></span><br/>

						<p>For appointments please contact Square Hospital 
							Appointment Desk at 8159457, 8144400, 01713141447
							or You can use our online base Appointment system. Thank You</p>
					</div>
						<div class="appoint-content">
							<form action="../view/index_make_an_appointment.php" method="POST" enctype="multipart/form-data">	
						  
							<table width="497">
							  <tr>
								<td width="172"><b>Patient Name:</b></td>
								<td width="100"><input type="text" name="name"  /></td>
							  </tr>
							  <tr>
								<td><b>Mobile No:</b></td>
								<td width="100"><input type="text" name="mobile" placeholder="+880" /></td>
							  </tr>
							  
							  <tr>
								<td><b>Age:</b></td>
								<td><select name="age">
									<option value="">Select Age....</option>
									<option > 0-6 Month </option>
									<option > 6-12 Month </option>
									<option > 1-5 </option>
									<option > 6 </option>
									<option > 7 </option>
									<option > 8 </option>
									<option > 9</option>
									<option > 10 </option>
									<option > 11</option>
									<option > 12 </option>
									<option > 13 </option>
									<option > 14</option>
									<option > 15</option>
									<option > 16</option>
									<option > 17 </option>
									<option > 18 </option>
									<option > 19 </option>
									<option > 20 </option>
									<option > 21</option>
									<option > 22 </option>
									<option > 23 </option>
									<option > 24 </option>
									<option > 25</option>
									<option > 26</option>
									<option > 27 </option>
									<option > 28</option>
									<option > 29 </option>
									<option > 30 </option>
									<option >31 </option>
									<option > 32 </option>
									<option > 33 </option>
									<option > 34 </option>
									<option > 35 </option>
									<option > 36 </option>
									<option > 37 </option>
									<option > 38 </option>
									<option > 39 </option>
									<option > 40</option>
									<option > 41</option>
									<option > 42 </option>
								
								  </select></td>
							  </tr>
							  </tr>
							  <tr>
								<td><b>Gender</b></td>
								<td><input name="gender" type="radio" value="Male"  />
								  &nbsp;Male&nbsp;
								  <input name="gender" type="radio" value="Female"  />
								&nbsp;Female</td>
							  </tr>
							  <tr>
								<td><b>Email Address</b></td>
								<td><input name="email" type="text" id="name"  /></td>
							  </tr>
							 
							  <tr>
								<td><b>Doctor</b></td>
								<td><select name="doctor" id="doctor_name">
									<option value="">Select Doctor Name</option>
									<option value="Prof. Md. Monwar Hossain">Prof. Md. Monwar Hossain -Cardiologist</option>
									<option value="Prof. Vernon Lee">Prof. Mosarof Hossain --Neurologist</option>
									<option value="Prof. DR. Khalilur Rahman">Prof. DR. Khalilur Rahman --Neurosurgeon </option>
									<option value="Prof. Md. Ahsanul Habib">Prof. Md. Ahsanul Habib--Psychiatrist </option>
									<option value="Prof. Wahiuddin Mahmood">Prof. Wahiuddin Mahmood--Urologist</option>
									<option value="DR. Shagufta Afreen Azhar">DR. Shagufta Afreen Azhar--Pathologist</option>
									<option value="DR. Shah Alam">DR. Shah Alam--Dentist</option>
									<option value="DR. Hiramony Sarma">DR. Hiramony Sarma--Eye Specelist</option>
									<option value="DR. Sharmina Alauddin">DR. Sharmina Alauddin-- ENT Specelist</option>
									<option value="DR. Muhammad Murtaza Kabir">DR. Muhammad Murtaza Kabir--Cardiologist</option>
									<option value="DR. Asif Mujtaba Mahmud">DR. Asif Mujtaba Mahmud--Orthopadic</option>
									
								  </select></td>
							  </tr><br/>
							   <tr>
								<td><b>Select Schedule Time :</b></td>
								<td><select name="schedule_time" id="doctor_name">
									<option >Morning (9 A.M To 12P.M)</option>
									<option >Evening (4 P.M To 8P.M)</option>
								  </select>
								</td>
							  </tr>
							  
							  <tr>
							  	 <td></td>
							  	  <td><button type="submit" name="submit">submit</button></td>
				
							  </tr>	    
							  
							</table>

							</form>



<?php
			include '../controller/appointment.php';
			?>
	</div>
					
</div>	  
</div>	 
		
		
	</body>
 </html>