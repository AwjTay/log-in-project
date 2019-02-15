<?php 

function register_login_details($sub_email, $sub_password ) {

	global $db_connection;

	$clean_email = mysqli_real_escape_string($db_connection, $sub_email);

$query = "INSERT INTO users (email, password) VALUES ('$clean_email', '$clean_password');";

}

include("registration_form.html");


if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["retype_password"])) {
	

}



?>




