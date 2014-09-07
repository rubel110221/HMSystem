<!DOCTYPE html>
<html>
	<head>
		<title>Feedback | Welcome to SQUARE Hospital</title>
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
						<h2>Feedback</h2>
							<div class="view-content">
							<form id="signupForm" method="post" action="feedbackpro.php">
						  
							<table width="497">
							  <tr>
								<td width="172"><b>Patient Name</b></td>
								<td width="313"><input type="text" name="patient_name"  /></td>
							  </tr>
							  <tr>
								<td><b>HN Number</b></td>
								<td><input type="text" name="hn_number"  /></td>
							  </tr>
							  <tr>
								<td><b>Gender</b></td>
								<td><input name="gender" type="radio" value="Male"  />
								  &nbsp;Male&nbsp;
								  <input name="gender" type="radio" value="Female"  />
								&nbsp;Female</td>
							  </tr>
							  <tr>
								<td><b>Your Name</b></td>
								<td><input name="name" type="text" id="name"  /></td>
							  </tr>
							  <tr>
								<td><b>Relation To Patient</b></td>
								<td><input name="relation" type="text" id="relation"  /></td>
							  </tr>
							  <tr>
								<td><b>Address</b></td>
								<td><textarea cols="30" rows="5" name="address"></textarea>                        </td>
							  <tr>
								<td><b>Country</b></td>
								<td><select name="country">
									<option value="">Select Country....</option>
									<option value="afghanistan"> Afghanistan </option>
									<option value="alandislands"> Aland Islands </option>
									<option value="albania"> Albania </option>
									<option value="algeria"> Algeria </option>
									<option value="americansamoa"> American Samoa </option>
									<option value="andorra"> Andorra </option>
									<option value="angola"> Angola </option>
									<option value="anguilla"> Anguilla </option>
									<option value="antarctica"> Antarctica </option>
									<option value="antigua"> Antigua </option>
									<option value="argentina"> Argentina </option>
									<option value="armenia"> Armenia </option>
									<option value="aruba"> Aruba </option>
									<option value="australia"> Australia </option>
									<option value="austria"> Austria </option>
									<option value="azerbaijan"> Azerbaijan </option>
									<option value="bahamas"> Bahamas </option>
									<option value="bahrain"> Bahrain </option>
									<option value="Bangladesh" selected="selected"> Bangladesh </option>
									<option value="barbados"> Barbados </option>
									<option value="belarus"> Belarus </option>
									<option value="belgium"> Belgium </option>
									<option value="belize"> Belize </option>
									<option value="benin"> Benin </option>
									<option value="bermuda"> Bermuda </option>
									<option value="bhutan"> Bhutan </option>
									<option value="bolivia"> Bolivia </option>
									<option value="bosnia"> Bosnia </option>
									<option value="botswana"> Botswana </option>
									<option value="bouvetisland"> Bouvet Island </option>
									<option value="brazil"> Brazil </option>
									<option value="bruneidarussalam"> Brunei Darussalam </option>
									<option value="bulgaria"> Bulgaria </option>
									<option value="burkinafaso"> Burkina Faso </option>
									<option value="burundi"> Burundi </option>
									<option value="cambodia"> Cambodia </option>
									<option value="cameroon"> Cameroon </option>
									<option value="canada"> Canada </option>
									<option value="chad"> Chad </option>
									<option value="chile"> Chile </option>
									<option value="china"> China </option>
									<option value="colombia"> Colombia </option>
									<option value="congo"> Congo </option>
									<option value="costa Rica"> Costa Rica </option>
									<option value="denmark"> Denmark </option>
									<option value="elsalvador"> El Salvador </option>
									<option value="finland"> Finland </option>
									<option value="france"> France </option>
									<option value="germany"> Germany </option>
									<option value="ghana"> Ghana </option>
									<option value="gibraltar"> Gibraltar </option>
									<option value="greece"> Greece </option>
									<option value="haiti"> Haiti </option>
									<option value="honduras"> Honduras </option>
									<option value="hongkong"> Hong Kong </option>
									<option value="hungary"> Hungary </option>
									<option value="iceland"> Iceland </option>
									<option value="india"> India </option>
									<option value="indonesia"> Indonesia </option>
									<option value="iran"> Iran </option>
									<option value="iraq"> Iraq </option>
									<option value="ireland"> Ireland </option>
									<option value="israel"> Israel </option>
									<option value="italy"> Italy </option>
									<option value="jamaica"> Jamaica </option>
									<option value="japan"> Japan </option>
									<option value="jersey"> Jersey </option>
									<option value="jordan"> Jordan </option>
									<option value="kazakhstan"> Kazakhstan </option>
									<option value="kenya"> Kenya </option>
									<option value="korea"> Korea </option>
									<option value="kuwait"> Kuwait </option>
									<option value="kyrgyzstan"> Kyrgyzstan </option>
									<option value="malaysia"> Malaysia </option>
									<option value="maldives"> Maldives </option>
									<option value="mali"> Mali </option>
									<option value="malta"> Malta </option>
									<option value="mexico"> Mexico </option>
									<option value="mongolia"> Mongolia </option>
									<option value="morocco"> Morocco </option>
									<option value="myanmar"> Myanmar </option>
									<option value="nepal"> Nepal </option>
									<option value="netherlands"> Netherlands </option>
									<option value="newzealand"> New Zealand </option>
									<option value="nigeria"> Nigeria </option>
									<option value="norway"> Norway </option>
									<option value="oman"> Oman </option>
									<option value="pakistan"> Pakistan </option>
									<option value="palau"> Palau </option>
									<option value="panama"> Panama </option>
									<option value="paraguay"> Paraguay </option>
									<option value="peru"> Peru </option>
									<option value="philippines"> Philippines </option>
									<option value="qatar"> Qatar </option>
									<option value="reunion"> Reunion </option>
									<option value="saudiarabia"> Saudi Arabia </option>
									<option value="singapore"> Singapore </option>
									<option value="southafrica"> South Africa </option>
									<option value="spain"> Spain </option>
									<option value="srilanka"> Sri Lanka </option>
									<option value="sudan"> Sudan </option>
									<option value="sweden"> Sweden </option>
									<option value="switzerland"> Switzerland </option>
									<option value="thailand"> Thailand </option>
									<option value="turkey"> Turkey </option>
									<option value="unitedarabemirates"> United Arab Emirates </option>
									<option value="unitedkingdom"> United Kingdom </option>
									<option value="unitedstates"> United States </option>
									<option value="vietnam"> Viet Nam </option>
									<option value="zimbabwe"> Zimbabwe </option>
								  </select>                        </td>
							  </tr>
							  <tr>
								<td><b>Cell Number</b></td>
								<td><input name="cell" type="number" id="cell"  /></td>
							  </tr>
							  <tr>
								<td><b>Your Email</b></td>
								<td><input type="text" name="email"  id="email"/></td>
							  </tr>
							  </tr>
							  
							  <tr>
								<td><b>Your Doctor</b></td>
								<td><select name="doctor_name" id="doctor_name">
									<option value="">Select Your Doctor Name</option>
									<option value="Prof. Md. Monwar Hossain">Prof. Md. Monwar Hossain</option>
									<option value="Prof. Vernon Lee">Prof. Vernon Lee</option>
									<option value="Prof. DR. Khalilur Rahman">Prof. DR. Khalilur Rahman</option>
									<option value="Prof. Md. Ahsanul Habib">Prof. Md. Ahsanul Habib</option>
									<option value="Prof. Wahiuddin Mahmood">Prof. Wahiuddin Mahmood</option>
									<option value="Prof. DR. Dilip Kumar Dhar">Prof. DR. Dilip Kumar Dhar</option>
									<option value="Prof. DR. Md. Afzalur Rahman">Prof. DR. Md. Afzalur Rahman</option>
									<option value="Prof. DR. M. S. Afrin">Prof. DR. M. S. Afrin</option>
									<option value="Prof. DR. Md. Sanawar Hossain">Prof. DR. Md. Sanawar Hossain</option>
									<option value="Prof. DR. B. Sudhakar Chandran">Prof. DR. B. Sudhakar Chandran</option>
									<option value="Prof. DR. Monzur Morshed">Prof. DR. Monzur Morshed</option>
									<option value="Prof. DR.MD. Kabirul Islam">Prof. DR.MD. Kabirul Islam</option>
									<option value="Prof. DR. Samiul Huq">Prof. DR. Samiul Huq</option>
									<option value="Prof. DR. M. A. Rashid">Prof. DR. M. A. Rashid</option>
									<option value="Prof. DR. Ninan Chacko">Prof. DR. Ninan Chacko</option>
									<option value="Prof. DR. Mohammad Waziul Alam Chowdhury">Prof. DR. Mohammad Waziul Alam Chowdhury</option>
									<option value="Prof .DR. Zahidul Hasan">Prof .DR. Zahidul Hasan</option>
									<option value="Prof. DR. Md. Aminul Islam Khan">Prof. DR. Md. Aminul Islam Khan</option>
									<option value="Lt. Col DR. Md. Sajedur Rahman">Lt. Col DR. Md. Sajedur Rahman</option>
									<option value="Major (retd) DR. Taslima Ferdous">Major (retd) DR. Taslima Ferdous</option>
									<option value="DR. A B M Sarwar-E-Alam<">DR. A B M Sarwar-E-Alam</option>
									<option value="DR. Mirza Nazim Uddin">DR. Mirza Nazim Uddin</option>
									<option value="DR. Jahangir Alam">DR. Jahangir Alam</option>
									<option value="DR. Abu Reza Mohammad Nooruzzaman">DR. Abu Reza Mohammad Nooruzzaman</option>
									<option value="DR. Zubayer Ahmed">DR. Zubayer Ahmed</option>
									<option value="DR. Raihan Rabbani">DR. Raihan Rabbani</option>
									<option value="DR. Khaled Mohsin">DR. Khaled Mohsin</option>
									<option value="DR. Md. Mizanur Rahman">DR. Md. Mizanur Rahman</option>
									<option value="DR. Abdullah Al Jamil">DR. Abdullah Al Jamil</option>
									<option value="DR. Md. Towhiduzzaman">DR. Md. Towhiduzzaman</option>
									<option value="DR. Moeen Uddin Ahmed">DR. Moeen Uddin Ahmed</option>
									<option value="DR. Kamal Pasha">DR. Kamal Pasha</option>
									<option value="DR. Apurba Kumar Sarma">DR. Apurba Kumar Sarma</option>
									<option value="DR. M. Akhter Hossain">DR. M. Akhter Hossain</option>
									<option value="DR. M. Motahar Hossain">DR. M. Motahar Hossain</option>
									<option value="DR. Ruhul Hassan Joarder">DR. Ruhul Hassan Joarder</option>
									<option value="DR. Rayhana Awwal">DR. Rayhana Awwal</option>
									<option value="DR. Md. Yasin Chowdhury">DR. Md. Yasin Chowdhury</option>
									<option value="DR. M. A. Zulkifl">DR. M. A. Zulkifl</option>
									<option value="DR. Kazi Ali Hassan">DR. Kazi Ali Hassan</option>
									<option value="DR. Qamruzzaman Chowdhury">DR. Qamruzzaman Chowdhury</option>
									<option value="DR. Md. Selim Reza">DR. Md. Selim Reza</option>
									<option value="DR. Muuhammad Tawfique">DR. Muuhammad Tawfique</option>
									<option value="DR. Md. Masudur Rahman">DR. Md. Masudur Rahman</option>
									<option value="DR. Aftab Yusuf Raj">DR. Aftab Yusuf Raj</option>
									<option value="DR. A. B. M. Abdus Salam">DR. A. B. M. Abdus Salam</option>
									<option value="DR. Lutfun Nahar Begum">DR. Lutfun Nahar Begum</option>
									<option value="DR Aftab Yousuf Raj">DR Aftab Yousuf Raj</option>
									<option value="DR. Syeda Ishrat Jahan">DR. Syeda Ishrat Jahan</option>
									<option value="DR. M.H. Shaheel Mahmood">DR. M.H. Shaheel Mahmood</option>
									<option value="DR. Fazul Hoqu">DR. Fazul Hoque</option>
									<option value="DR. Md. Mustafizur Rahman">DR. Md. Mustafizur Rahman</option>
									<option value="DR. Mesbah Uddin Ahmed">DR. Mesbah Uddin Ahmed</option>
									<option value="DR. Javed Rasheed Chowdhury">DR. Javed Rasheed Chowdhury</option>
									<option value="DR. Paul T. Henry">DR. Paul T. Henry</option>
									<option value="DR. Shaikh Abdul Kader">DR. Shaikh Abdul Kader</option>
									<option value="DR. Sk. Mahbub Alam">DR. Sk. Mahbub Alam</option>
									<option value="DR. S. R. Begum">DR. S. R. Begum</option>
									<option value="DR. Nargis Fatema">DR. Nargis Fatema</option>
									<option value="DR. Khaleda Yeasmin Mirza">DR. Khaleda Yeasmin Mirza</option>
									<option value="DR. Kashefa Nazneen">DR. Kashefa Nazneen</option>
									<option value="DR. Nasima Shaheen">DR. Nasima Shaheen</option>
									<option value="DR. Rehnuma Jahan">DR. Rehnuma Jahan</option>
									<option value="DR. Md. Zakir Hussain">DR. Md. Zakir Hussain</option>
									<option value="DR. ATM Samdani">DR. ATM Samdani</option>
									<option value="DR. Shagufta Afreen Azhar">DR. Shagufta Afreen Azhar</option>
									<option value="DR. Shah Alam">DR. Shah Alam</option>
									<option value="DR. Hiramony Sarma">DR. Hiramony Sarma</option>
									<option value="DR. Sharmina Alauddin">DR. Sharmina Alauddin</option>
									<option value="DR. Muhammad Murtaza Kabir">DR. Muhammad Murtaza Kabir</option>
									<option value="DR. Asif Mujtaba Mahmud">DR. Asif Mujtaba Mahmud</option>
									<option value="DR. M. A. Wahab">DR. M. A. Wahab</option>
									<option value="DR. Mosaddeque Ahmed">DR. Mosaddeque Ahmed</option>
									<option value="DR. Subbian Esakkimuthu Asary">DR. Subbian Esakkimuthu Asary</option>
									<option value="DR. Mrs. Sharmin Haque">DR. Mrs. Sharmin Haque</option>
									<option value="DR. Shah Muhammad Ali">DR. Shah Muhammad Ali</option>
									<option value="DR. Bhabesh Chandra Monda">DR. Bhabesh Chandra Mondal</option>
									<option value="DR. Tahmina Banu">DR. Tahmina Banu</option>
									<option value="DR. Ranadhir Kumar Kundu">DR. Ranadhir Kumar Kundu</option>
									<option value="DR. Zakiur Rahman">DR. Zakiur Rahman</option>
									<option value="DR. Suresh Kattera">DR. Suresh Kattera</option>
									<option value="DR. Reshma Aziz">DR. Reshma Aziz</option>
								  </select> <br/>                       </td>
							  </tr>
							  <tr>
								<td><p>&nbsp;</p>
								  <p >DOCTORS</p>
								</td>
							  </tr>
							  <tr>
								<td>Care and Concern</td>
								<td><input name="care_concern_doctor" type="radio" value="Excellent"  />
								  &nbsp;Excellent&nbsp;
								  <input name="care_concern_doctor" type="radio" value="Good"  />
								  &nbsp;Good&nbsp;
								  <input name="care_concern_doctor" type="radio" value="Satisfactory"  />
								  &nbsp;Satisfactory&nbsp;
								  <input name="care_concern_doctor" type="radio" id="care_concern_doctor" value="Poor"  />
								&nbsp;Poor&nbsp;</td>
							  </tr>
							  <tr>
								<td>Treated you with respect</td>
								<td><input name="treated_respect_doctor" type="radio" id="treated_respect_doctor" value="Excellent"  />
								  &nbsp;Excellent&nbsp;
								  <input name="treated_respect_doctor" type="radio" id="treated_respect_doctor" value="Good"  />
								  &nbsp;Good&nbsp;
								  <input name="treated_respect_doctor" type="radio" id="treated_respect_doctor" value="Satisfactory"  />
								  &nbsp;Satisfactory&nbsp;
								  <input name="treated_respect_doctor" type="radio" id="treated_respect_doctor" value="Poor"  />
								&nbsp;Poor&nbsp;</td>
							  </tr>
							  <tr>
								<td>Information &amp; Explanation of your condition/procedure</td>
								<td><input name="information_explanation_doctor" type="radio" id="information_explanation_doctor" value="Excellent"  />
								  &nbsp;Excellent&nbsp;
								  <input name="information_explanation_doctor" type="radio" id="information_explanation_doctor" value="Good"  />
								  &nbsp;Good&nbsp;
								  <input name="information_explanation_doctor" type="radio" id="information_explanation_doctor" value="Satisfactory"  />
								  &nbsp;Satisfactory&nbsp;
								  <input name="information_explanation_doctor" type="radio" id="information_explanation_doctor" value="Poor"  />
								&nbsp;Poor&nbsp;</td>
							  </tr>
							  <tr>
								<td><p>&nbsp;</p>
								  <p class="style2">NURSES</p></td>
							  </tr>
							  <tr>
								<td>Care and Concern</td>
								<td><input name="care_concern_nurses" type="radio" id="care_concern_nurses" value="Excellent"  />
								  &nbsp;Excellent&nbsp;
								  <input name="care_concern_nurses" type="radio" id="care_concern_nurses" value="Good"  />
								  &nbsp;Good&nbsp;
								  <input name="care_concern_nurses" type="radio" id="care_concern_nurses" value="Satisfactory"  />
								  &nbsp;Satisfactory&nbsp;
								  <input name="care_concern_nurses" type="radio" id="care_concern_nurses" value="Poor"  />
								&nbsp;Poor&nbsp;</td>
							  </tr>
							  <tr>
								<td>Treated you with respect</td>
								<td><input name="treated_respect_nurses" type="radio" id="treated_respect_nurses" value="Excellent"  />
								  &nbsp;Excellent&nbsp;
								  <input name="treated_respect_nurses" type="radio" id="treated_respect_nurses" value="Good"  />
								  &nbsp;Good&nbsp;
								  <input name="treated_respect_nurses" type="radio" id="treated_respect_nurses" value="Satisfactory"  />
								  &nbsp;Satisfactory&nbsp;
								  <input name="treated_respect_nurses" type="radio" id="treated_respect_nurses" value="Poor"  />
								&nbsp;Poor&nbsp;</td>
							  </tr>
							  <tr>
								<td>Information &amp; Explanation of your condition/procedure</td>
								<td><input name="information_explanation_nurses" type="radio" id="information_explanation_nurses" value="Excellent"  />
								  &nbsp;Excellent&nbsp;
								  <input name="information_explanation_nurses" type="radio" id="information_explanation_nurses" value="Good"  />
								  &nbsp;Good&nbsp;
								  <input name="information_explanation_nurses" type="radio" id="information_explanation_nurses" value="Satisfactory"  />
								  &nbsp;Satisfactory&nbsp;
								  <input name="information_explanation_nurses" type="radio" id="information_explanation_nurses" value="Poor"  />
								&nbsp;Poor&nbsp;</td>
							  </tr>
							  <tr>
								<td><p>&nbsp;</p>
								  <p class="style2">ENVIRONMENT</p></td>
							  </tr>
							  <tr>
								<td>Over All</td>
								<td><input name="over_all" type="radio" id="over_all" value="Excellent"  />
								  &nbsp;Excellent&nbsp;
								  <input name="over_all" type="radio" id="over_all" value="Good"  />
								  &nbsp;Good&nbsp;
								  <input name="over_all" type="radio" id="over_all" value="Satisfactory"  />
								  &nbsp;Satisfactory&nbsp;
								  <input name="over_all" type="radio" id="over_all" value="Poor"  />
								&nbsp;Poor&nbsp; </td>
							  </tr>
							  <tr>
								<td>Cleanliness of Toilet</td>
								<td><input name="cleanliness_toilet" type="radio" id="cleanliness_toilet" value="Excellent"  />
								  &nbsp;Excellent&nbsp;
								  <input name="cleanliness_toilet" type="radio" id="cleanliness_toilet" value="Good"  />
								  &nbsp;Good&nbsp;
								  <input name="cleanliness_toilet" type="radio" id="cleanliness_toilet" value="Satisfactory"  />
								  &nbsp;Satisfactory&nbsp;
								  <input name="cleanliness_toilet" type="radio" id="cleanliness_toilet" value="Poor"  />
								&nbsp;Poor&nbsp; </td>
							  </tr>
							  
							  <tr>
								<td><span class="style2">Please give us your suggestion for further improvement</span></td>
								<td>&nbsp; <textarea name="suggestion" cols="60" rows="5" id="suggestion"></textarea></td>
							  </tr>
							  <tr>
								<td>&nbsp;</td>
								<td><input type="submit" name="btn" value="Send"  /></td>
							  </tr>
							</table>

							</form>
							<h2 align="center" style="font-size:18px">
							  <p class="style3 style1">WE WISH YOU AND YOUR FAMILY THE BEST HEALTH ALWAYS</p>
							</h2>
						</div>
					</div>
				</div>
		</div>
		
	</body>
 </html>