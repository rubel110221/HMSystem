<?php
if(isset($_POST['submit'])) {

	mysql_connect('localhost','root','') or die(mysql_error());
     mysql_select_db("square_database" );

if(!empty($_POST['title']) && !empty($_POST['reference']) && !empty($_POST['location']) && !empty($_POST['deadline'] )&& !empty($_POST['vacancy']) && !empty($_POST['description']) && !empty($_POST['requirement']) &&!empty($_POST['address'] )) 
{

     	$title = $_POST['title'];
		$reference = $_POST['reference'];
		$location = $_POST['location'];
		$deadline = $_POST['deadline'];
		$vacancy = $_POST['vacancy'];
		$description = $_POST['description'];
		$requirement = $_POST['requirement'];
		$address = $_POST['address'];

		$Query = "INSERT INTO  career ( title ,  reference , location , deadline , vacancy , description , requirement , address) VALUES ('$title','$reference','$location','$deadline','$vacancy','$description','$requirement','$address')";
		mysql_query($Query);
		//echo  $degree;	
        echo '<span class="success">insertion successfull...........</span>';

    }

else
	echo '<span class="error">Fill Out All The Blanks !!!</span>';

  }
?>