<?php

$messErr ="";
$name = $password ="";
$connection = mysql_connect('localhost','root','');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = test_input($_POST["name"]);
$password = test_input($_POST["password"]);
$db_slect = mysql_select_db("square_database",$connection );
$query = "SELECT * FROM adminlogin WHERE userName = '$name' AND password = '$password'";

$result = mysql_query($query);
$count = mysql_num_rows($result);
if($count==1)
 {
    session_start();
	$_SESSION['password']=$password;
    $_SESSION['username']=$userName;
	header ("Location: dashboard.php");
 }
else
 {
    //echo "<script> alert ('Invalid Username o Password');   window.location.href ='login.php'</script>";
	$messErr ="Invalid Username or Password";	
 }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

?>	