<h1>My awesome site!</h1>

<?php


$sub_email = "nigelcrompton@grimshawironworks";
$sub_password = "goldstandard";


if ($sub_email === ($_POST['email']) && $sub_password === ($_POST['password'])) {
	$validuser = true;
}


else {
	$validuser = false;
}

if ($validuser) {
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

