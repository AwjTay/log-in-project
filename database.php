<?php

$db_server = "localhost";
$db_username = "root";
$db_password = "root";
$db_database = "scotchbox";

// Create connection
$db_connection = new mysqli($db_server, $db_username, $db_password, $db_database);

/*function verify_login_details($db_connection, $sub_email, $sub_password) {
	$query = 'SELECT * FROM `users`;'
	$result = mysqli_query($db_connection, $query);
*/



// global method
function verify_login_details($sub_email, $sub_password ) {

	global $db_connection;

	$clean_email = mysqli_real_escape_string($db_connection, $sub_email);

	$query = "SELECT * FROM `users` WHERE `email` = '$clean_email';";

	$result = mysqli_query($db_connection, $query);
	
	if (mysqli_num_rows($result) === 1) {
		$row = mysqli_fetch_assoc($result);
		
		if ($row["password"] === $sub_password) {
			return true;
		}
	}

	return false;
}


?>