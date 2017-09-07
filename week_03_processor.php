<?php

function writeToPhonebook($first,$last,$phone) {
	// Specifty my database file
	$fileName = "week_03_phonebook.txt";
	$fileMode = "a+";
	$date     = date("Y-m-d H:i:s");
	
	// Put the record together 
	$textToWrite = $first."|".$last."|".$phone."|".$date."\n";
	
	// Open and write to the file
	$handler = fopen($fileName,$fileMode);
	fwrite($handler,$textToWrite);
	fclose($handler);
}

// Get our submitted form information
$firstName = $_POST['firstNameInput'];
$lastName  = $_POST['lastNameInput']; 
$phone     = $_POST['phoneInput'];

// Check for blanks
if(empty($firstName) || empty($lastName) || empty($phone)) {
	die("You left a field blank! Don't do that!");
}

if(!is_string($firstName) || !is_string($lastName)) {
	die("Please enter a valid name");
}

// phone number checker
if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $phone)) {
	die("Please enter a phone number formatted like: 000-000-0000");
}

// Line to write to file
writeToPhonebook($firstName, $lastName, $phone);

echo "<br><br>thanks for sending your digits!"

?>

<br><br>
<a href="week_03_form.html">Go back</a> to the form