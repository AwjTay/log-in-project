<?php 

include("database.php");

function register_login_details($sub_name, $sub_email, $sub_password ) {

	global $db_connection;

	$clean_name = mysqli_real_escape_string($db_connection, $sub_name);	

	$clean_email = mysqli_real_escape_string($db_connection, $sub_email);

	$clean_password = mysqli_real_escape_string($db_connection, $sub_password);


$query = "INSERT INTO users (name, email, password) VALUES ('$clean_name', $clean_email', '$clean_password');";

}
//user has navigated to registration
include("registration_form.html");

//user completes all four fields of registraton
if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["retype_password"])) {

	//submitted passwords match
	if($_POST["password"] === $_POST["retype_password"]) {
		var_dump($)
		register_login_details(($_POST["name"]), ($_POST["email"]), ($_POST["password"]));
		?> <p>Thankyou. Please check your email account for a verification message.</p> <?php
		//email verification
	}

	//submitted passwords do not match
	else if ($_POST["password"] !== $_POST["retype_password"]){
		?> <p>You're passwords do not match!</p> <?php
	}

} else {
	//user has not completed all fields
	?> <p>Please complete all fields!</p> <?php
}





?>




