<!doctype html>
<html lang="en">
	<head>
		<title>Login Site</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="styles.css">
	</head>


<h1>My awesome site!</h1>

<a href="registration.php">Click here to register!</a>


<?php
//valid user and password to test: sam@yahoo.com / password

session_start();
//connect to database
include("database.php");
//check connection
if ($db_connection->connect_error) {
    die("Connection failed: " . $db_connection->connect_error);
} 

//user logs out
if (isset($_POST["logout"])) {
	$_SESSION["logged_in"] = false;
		include('logged_out.html');
}

//User already logged in
 if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {
	?> <p>Welcome back</p> <?php
	include('logout.html');


//Is the user trying to log in?
} else if (isset($_POST["email"]) && isset($_POST["password"]))  {

	//User logs in with valid userame and password
	if  (verify_login_details($_POST["email"], $_POST["password"])) {
		//echo "gone through here";
		$_SESSION["logged_in"] = true;
		?> <p>Welcome</p> <?php 
		include('logout.html');
		
	// User submits invalid username/password
 	} else {

		?><p>Access Denied!</p> 
		<?php
		include('form.html'); 
		
	}

}  else {
	//var_dump($_SESSION);
	include('form.html'); 
		
}

?>

<footer>
	
</footer>
