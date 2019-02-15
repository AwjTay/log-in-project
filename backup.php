<h1>My awesome site!</h1>

<?php
session_start();
//connect to database
include("database.php");
//check connection
if ($db_connection->connect_error) {
    die("Connection failed: " . $db_connection->connect_error);
} 



$sub_email = "root@root";
$sub_password = "root";

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
	if  ($_POST['email'] === $sub_email && $_POST['password'] === $sub_password) {
		$_SESSION["logged_in"] = true;
		?> <p>Welcome</p> <?php 
		include('logout.html');
		//database test
		//var_dump($result);

		//user logs out
		if (isset($_POST["logout"])) {
			$_SESSION["logged_in"] = false;
			include('logged_out.html');
		}

//User is not logged in and submits invalid username/password
 } else if ($_SESSION["logged_in"] = false && ($sub_email !== ($_POST['email'])) || ($sub_password !== ($_POST['password']))) {

		?><p>Access Denied!</p> 
		<?php
		include('form.html'); 
		?>

	<?php
	}
	else {
		var_dump($_SESSION);
	}



} 
else {
	//var_dump($_SESSION);
	include('form.html'); 
		
}

?>

