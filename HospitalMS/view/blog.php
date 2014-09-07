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
		<link  type="text/css" rel="stylesheet" href="../css/style.css"/>
		<link  type="text/css" rel="stylesheet" href="../css/New_Post_Css.css"/>
		<style>
		.error {color: #FF0000;}
		.success {color: green;}
		</style>
	</head>

	<body>
		<div id="main_news_events">
			 <?php include 'headerAdmin.php';?>
			 <?php include 'side_menuAdmin.php';?>
			 
			<div id="news_events">
				
				    <h3>Post New Blog :</h3>
					<label for="Job">Title :</label><br/>
				<form action="../view/blog.php" method="POST" enctype="multipart/form-data">			
					<input   type="text" name="title"  id="Job" style="width: 250px;" /><br/>
					<label for="Job">Category :</label><br/>
					<select  name="category" >
						<option>Human Resources</option>
						<option>Marketing and Business Development</option>
						<option>Medical Services</option>
						<option>News</option>
					</select><br/>
					<label for="Description">General Description :</label><br/>
					<textarea  id="Description" name="description" cols="54" rows="10">
					</textarea><br/>
					Upload a picture:				
					<input type="file" name="image"/><br/><br/>
					
					 <input type="submit" name="submit" value="submit">
				</form>


<?php

if(isset($_POST['submit'])) {

	mysql_connect('localhost','root','') or die(mysql_error());
     mysql_select_db("square_database" );

	$imageName =  mysql_real_escape_string($_FILES['image']['name']);
    $imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
    $imageType = mysql_real_escape_string($_FILES["image"]["type"]);

if(!empty($_POST['title']) && !empty($_POST['category']) && !empty($_POST['description']))
{
   if(substr($imageType,0,5)=="image")
     {
     	$title = $_POST['title'];
		$category = $_POST['category'];
		$description = $_POST['description'];
		$Query = "INSERT INTO  blog ( title ,  category , description , image_name , image_data) VALUES ('$title','$category','$description','$imageName','$imageData')";
		mysql_query($Query);
		//echo  $degree;	
        echo '<span class="success">insertion successfull...........</span>';

    }
   else
     echo '<span class="error">only images are allowed !!!</span>'; 
   
}

else
	echo '<span class="error">Fill Out All The Blanks !!!</span>';
  }
?>

			</div>



		</div>
		
			
	</body>
</html>	