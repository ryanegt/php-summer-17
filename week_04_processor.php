<?php
session_start();

/*
 * Do stuff to register a user: write their information
 * to a flat file database!
 */
 
if($_GET['action'] == "register") {
	
	$email     = $_POST['emailInput'];
	$password  = md5($_POST['passwordInput']);
	$firstName = $_POST['firstNameInput'];
	$lastName  = $_POST['lastNameInput'];
	
	$fileName = "week_04_users.txt";
	$textToWrite = $email."|".$password."|".$firstName."|".$lastName."\n";
	
	// Open and write to the file
	$handler = fopen($fileName,"a+");
	fwrite($handler,$textToWrite);
	fclose($handler);
	
	echo "Thanks for registering $firstName. Go to the <a href='week_04_login.html'>login page</a>.";

}

/*
 * Login a user. We need to check to see if they
 * are in the flat file, and check if they entered
 * the correct password.
 */

elseif($_GET['action'] == "login") {
	
	// echo "LETS DO SOME LOGIC MAGIC";
	// $_POST['emailInput']
	// $_POST['passwordInput']
	
	$isLoggedIn = false;
	$fileName = "week_04_users.txt";
	$lines = file($fileName);
	
	// echo "<pre>";
	// print_r($lines);
	foreach($lines as $row) {		
		$userParts = explode("|", $row);
		// [0]=>email, [1]=>password, [2]=>firstname, [3]=>lastname
		// print_r($userParts);
		if($userParts[0] == $_POST['emailInput'] && $userParts[1] == crypt($_POST['passwordInput'])) {
			$_SESSION['email']     = $userParts[0];
			$_SESSION['firstname'] = $userParts[2];
			$_SESSION['is_user']   = 1;
			$isLoggedIn = true;
			break;
		}
	}
	
	if($isLoggedIn) {
		echo "you are logged in!!!";
	} else {
		echo "Bad username or password";
	}
	
}

elseif($_GET['action'] == "logout") {
	
	session_destroy();		
	echo "you are logged out!";
	
} else {
	echo "I don't understand what you want";
}


?>