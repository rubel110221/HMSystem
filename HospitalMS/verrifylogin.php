<?php
$connection = mysql_connect('localhost','root','');
$userName=$_POST['username'];
$password =$_POST['password'];
$db_slect = mysql_select_db("square_database",$connection );
$query = "SELECT * FROM adminlogin WHERE userName = '$userName' AND password = '$password'";
$result = mysql_query($query);
$count = mysql_num_rows($result);
if($count==1)
{
	//include 'dashboard.php';
	$_SESSION['password']=$password;
    $_SESSION['username']=$userName;
	header ("Location: dashboard.php");
}
else
{
    //echo "<script> alert ('Invalid Username o Password');   window.location.href ='login.php'</script>";
	//$msg =" Error log in";

	
}

?>