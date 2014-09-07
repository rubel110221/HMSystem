<?php

if(isset($_POST['submit'])) {

	mysql_connect('localhost','root','') or die(mysql_error());
    mysql_select_db("square_database" );

if(!empty($_POST['name']) && !empty($_POST['mobile']) && !empty($_POST['age']) && !empty($_POST['gender'] )&& !empty($_POST['email']) && !empty($_POST['doctor']) && !empty($_POST['schedule_time'] )) 
{

     	$name = $_POST['name'];
		$mobile = $_POST['mobile'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$doctor = $_POST['doctor'];
		$schedule_time = $_POST['schedule_time'];

		$Query = "INSERT INTO  appointment ( name ,  mobile , age , gender , email ,  doctor , schedule_time) VALUES ('$name','$mobile','$age','$gender','$email','$doctor','$schedule_time')";
		mysql_query($Query);
		//echo  $degree;	
        echo "<span class='success'>"."We Received Your Appointment successfully."."<br/>"."Please Take Your Token From Our Hospital At Office Time From 9 A.M To 11 P.M."."<br/>"."Thank You For Being With Us"."</span>";

    }

else
	echo "<span class='error'>"."Fill Out All The Blanks !!!"."</span>";

  }
?>