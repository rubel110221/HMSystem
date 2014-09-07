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
				
				    <h3>Post New News & Events :</h3>
					<label for="Job">News or Events Title :</label><br/>
				<form action="../view/news_events.php" method="POST" enctype="multipart/form-data">		
					<input   type="text" name="title"  id="Job" style="width: 250px;" /><br/>
						<label for="Job">Types Of  News & Events :</label><br/>
					<select  name="types" >
						<option>Archive News</option>
						<option>Messages</option>
						<option>Notice</option>
						<option>Press Released</option>
						<option>Advertisement</option>
						<option>News Letters</option>
					</select><br/>
					<label for="Description">General Description :</label><br/>
					<textarea  id="Description" name="description" cols="54" rows="10">
					</textarea><br/>
					<input type="submit" name="submit" value="submit">
				</from>





<?php

if(isset($_POST['submit'])) {

	mysql_connect('localhost','root','') or die(mysql_error());
     mysql_select_db("square_database" );

if(!empty($_POST['title']) && !empty($_POST['types']) && !empty($_POST['description'])) 
{

     	$title = $_POST['title'];
		$types = $_POST['types'];
		$description = $_POST['description'];
		$Query = "INSERT INTO  news_events ( title ,  types , description) VALUES ('$title', '$types' , '$description')";
		mysql_query($Query);
		//echo  $degree;	
        echo '<span class="success">insertion successfull...........</span>';

    }

else
	echo '<span class="error">Fill Out All The Blanks !!!</span>';

  }
?>

			</div>



		</div>
		
			
	</body>
</html>	