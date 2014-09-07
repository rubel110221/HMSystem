<?php





if(isset($_POST['submit'])) {

	mysql_connect('localhost','root','') or die(mysql_error());
     mysql_select_db("square_database" );

	$imageName =  mysql_real_escape_string($_FILES['image']['name']);
    $imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
    $imageType = mysql_real_escape_string($_FILES["image"]["type"]);




if(!empty($_POST['name']) && !empty($_POST['designation']) && !empty($_POST['department']) && !empty($_POST['department'] )&& !empty($_POST['degree']) && !empty($_POST['experience']) && !empty($_POST['description'])) 
{
  



   if(substr($imageType,0,5)=="image")
     {


     	$name = $_POST['name'];
		$designation = $_POST['designation'];
		$department = $_POST['department'];
		$degree = $_POST['degree'];
		$experience = $_POST['experience'];
		$description = $_POST['description'];

		$Query = "INSERT INTO  physicians ( name ,  designation , department , degree , experience , description , picture_name , picture_data) VALUES ('$name','$designation','$department','$degree','$experience','$description','$imageName','$imageData')";
		mysql_query($Query);
		//echo  $degree;	
        echo '<span class="success">insertion successfull...........</span>';

    }
   else
    {
     echo '<span class="error">only images are allowed !!!</span>'; 
    }
   
}

else
	echo '<span class="error">Fill Out All The Blanks !!!</span>';

  }
?>