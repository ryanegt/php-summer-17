<?php
session_start();

// echo "<pre>";
// print_r($_SERVER);

// echo "<script>console.log('string to the JS console');</script>";

function is_logged_in() {
	return isset($_SESSION['is_user']);
}

echo "<h1>What is the answer, to life the universe and everything?</h1>";


if(is_logged_in()) {
	
	// Some sensitive information
	echo "its, 42 ".$_SESSION['firstname']."... duh.";
	echo "<br><br><a href='week_04_processor.php?action=logout'>Logout</a>";
	
} else {
	
	echo "You need to be logged in to see this.";
	
}


?>



