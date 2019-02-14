<h1>My awesome site!</h1>

<?php
session_start();

$sub_email = "root@root";
$sub_password = "root";


//User already logged in
if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {
	?> <p>Welcome back</p> <?php 

}

//Is the user trying to log in?
else if ($_POST) {
	//User logs in with valid userame and password
	if ($_POST['email'] === $sub_email && $_POST['password'] === $sub_password) {
		$_SESSION["logged_in"] = true;
		?> <p>Welcome</p> <?php 

//User is not logged in and submits invalid username/password
  }	else if ($_SESSION["logged_in"] = false && ($sub_email !== ($_POST['email'])) || ($sub_password !== ($_POST['password']))) {

	?>	<p>Access Denied!</p> 

		<form action="index.php" method="post">
		<label for="email">Email:</label>
		<input id="email" type="email" name="email">

		<label for="password">Password:</label>
		<input id="password" type="password" name="password">

		<input action="" type="submit" name="Log in" value="Log in">
		</form>

	<?php
	}
	else {
		var_dump($_SESSION);
	}


//$sub_email === $_POST['email'] && $sub_password === $_POST['password']) {
//	$_SESSION["logged_in"] = true;
} 
else {
	var_dump($_SESSION);
	?>	<form action="index.php" method="post">
		<label for="email">Email:</label>
		<input id="email" type="email" name="email">

		<label for="password">Password:</label>
		<input id="password" type="password" name="password">

		<input action="" type="submit" name="Log in" value="Log in">
		</form>
<?php
}
?>

