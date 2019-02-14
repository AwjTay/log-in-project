<h1>My awesome site!</h1>

<?php

//session_start();

$sub_email = "nigelcrompton@grimshawironworks";
$sub_password = "goldstandard";

//$validuser = $_SESSION["login"] === true;

// if they have submitted the form
	// if they have logged in correctly
		// show a nice miessae
	// else
		// show an error
		// show the form again
// else
	//show the form
$loggedin = false;


if ($sub_email === ($_POST['email']) && $sub_password === ($_POST['password'])) {
	$loggedin = true;
	?> <p>Welcome</p> <?php 
}


else {
	?> <p>Access Denied!</p> 

	<form action="index.php" method="post">
	<label for="email">Email:</label>
	<input id="email" type="email" name="email">

	<label for="password">Password:</label>
	<input id="password" type="password" name="password">

	<input action="" type="submit" name="Log in" value="Log in">
</form>

<?php



}

//(isset($_POST['email']) && isset($_POST['password'])) && 
?>

