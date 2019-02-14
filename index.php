<h1>My awesome site!</h1>

<?php
session_start();

$sub_email = "root@root";
$sub_password = "root";

//var_dump(isset($_POST["logout"]));


if (isset($_POST["logout"])) {
	$_SESSION["logged_in"] = false;
			include('logged_out.html');

}

//User already logged in
 if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {
	?> <p>Welcome back</p> <?php
	echo "heloo";
	include('logout.html');


	//user logs out
 


//Is the user trying to log in?
} else if (isset($_POST["email"]) && isset($_POST["password"]))  {
	//User logs in with valid userame and password
	if  ($_POST['email'] === $sub_email && $_POST['password'] === $sub_password) {
		$_SESSION["logged_in"] = true;
		?> <p>Welcome</p> <?php 
		include('logout.html'); 

		//user logs out
		if (isset($_POST["logout"])) {
			$_SESSION["logged_in"] = false;
			include('logged_out.html');
		}



//User is not logged in and submits invalid username/password
  }	else if ($_SESSION["logged_in"] = false && ($sub_email !== ($_POST['email'])) || ($sub_password !== ($_POST['password']))) {

	?>	<p>Access Denied!</p> 
		<?php
		include('form.html'); 
		?>

	<?php
	}
	else {
		var_dump($_SESSION);
	}


//$sub_email === $_POST['email'] && $sub_password === $_POST['password']) {
//	$_SESSION["logged_in"] = true;
} 
else {
	//var_dump($_SESSION);
	include('form.html'); 
		
}

//var_dump($_POST)
?>

