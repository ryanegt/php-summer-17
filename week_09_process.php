<?php
session_start();

include "./week_09_utilities.php"; // to get at our login function

/*
 * now this file just has to handle POST variables and figure
 * out what to do with them and how to return stuff
 */

$isLoggedIn = login($_POST['emailInput'],$_POST['passwordInput']);

if($isLoggedIn) {
	echo json_encode(["success"=>1]);
} else {
	echo json_encode(["success"=>0]);
}

?>