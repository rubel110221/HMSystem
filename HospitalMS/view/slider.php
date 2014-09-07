
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
		<div id="main_slider">
			 <?php include 'headerAdmin.php';?>
			 <?php include 'side_menuAdmin.php';?>
			 
			<div id="slider">
			 <form action="../view/slider.php" method="POST" enctype="multipart/form-data">
				<div>
					<label for="name">Upload Slider Picture :</label><br/>
					<input type="file" name="image"/>
					
				</div>
				<div>
			       <input type="submit" name="submit" value="submit">
		       </div>
			</form>


<?php

if(isset($_POST['submit'])) {

	mysql_connect('localhost','root','') or die(mysql_error());
     mysql_select_db("square_database" );

	$imageName =  mysql_real_escape_string($_FILES['image']['name']);
    $imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
    $imageType = mysql_real_escape_string($_FILES["image"]["type"]);



   if(substr($imageType,0,5)=="image")
     {

		$Query = "INSERT INTO  slider ( picture_name , picture_data) VALUES ('$imageName','$imageData')";
		mysql_query($Query);
		//echo  $degree;	
        echo '<span class="success">insertion successfull...........</span>';

    }
   else
    {
     echo '<span class="error">only images are allowed !!!</span>'; 
    }
   
}

?>



			 </div>
			  
			 
		</div>
</body>
</html>	