<?php

$db_server = "localhost";
$db_username = "root";
$db_password = "root";
$db_database = "scotchbox";

// Create connection
$db_connection = new mysqli($db_server, $db_username, $db_password, $db_database);


//build a select query
$query = 'SELECT * FROM `users` WHERE `id` LIKE `1';

//run query
$result = mysqli_query($db_connection, $query);

/*if (mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
		var_dump($row);
	}
}

*/


?>