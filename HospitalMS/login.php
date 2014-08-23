<!DOCTYPE html>
<html>

	<head>
		<title>Welcome To Admin Panel</title>
		<link rel="shortcut icon" href="resource/icon.ico"/>
		<link  type="text/css" rel="stylesheet" href="css/style.css"/>
		
		<style>
		.error {color: #FF0000;}
		</style>
		
		
	</head>

	<body>
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

/*
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
	 }

      if (empty($_POST["password"])) {
     $passErr = "password is required";
   } else {
     $password = test_input($_POST["password"]);
   }
}
*/
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

?>	
	
		<div id="main_login">
			<div id="main_content">
				<div id="admin"><h1>Admin Area</h1>
				</div>
			
				<div class="lg-container">	
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post" >
						<div>
							<label for="username">Username:</label>
							<input type="text" name="name" placeholder="username"/>
					
						</div>
						<div>
							<label for="password">Password:</label>
							<input type="password" name="password" placeholder="password" />

						</div>
						<div id="button">				
							<button type="submit" id="login" style="width:65px; height:30px;">Login</button>
						</div>
						
						
					</form>
				</div>
				<div id="message">
                <span class="error"><?php echo  $messErr; ?></span>
				</div>
			 			 
		</div>
	</div>

</body>
</html>	