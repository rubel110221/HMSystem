 <?php
                 if (isset ($_POST['submit'])) 	{
				 
				 
					mysql_connect('localhost','root','');
					mysql_select_db("square_database");
					$imageName = mysql_real_escape_string($_FILES["image"]["name"]);
					$imageData  = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
					$name = $_POST['name'];
					$designation = $_POST['designation'];
					$department = $_POST['department'];
					$degree = $_POST['degree'];
					$experience = $_POST['experience'];
					$description = $_POST['description'];
					//echo $name."   ". $category_dropdown."   ".$desccription;
					//echo $desccription;
					$Query = "INSERT INTO physicians ( name ,  designation , department , degree , experience , description , picture_name , picture_data) VALUES ('$name','$designation','$department','$degree','$experience','$description','$imageName','$imageData')";
					mysql_query($Query);
					//mysql_query("INSERT INTO news VALUES ($name','$category_dropdown','$desccription','$imageName','$imageData')");
					
					}

?>