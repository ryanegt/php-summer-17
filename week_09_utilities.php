<?php

function login($email,$password) {
	// echo $email." ";echo $password;
	$fileName = "week_04_users.txt";
	$lines = file($fileName);
	
	// echo "<pre>";
	// print_r($lines);
	foreach($lines as $row) {		
		$userParts = explode("|", $row);
		// [0]=>email, [1]=>password, [2]=>firstname, [3]=>lastname
		// print_r($userParts);
		if($userParts[0] == $email && $userParts[1] == md5($password)) {
			$_SESSION['email']     = $userParts[0];
			$_SESSION['firstname'] = $userParts[2];
			$_SESSION['is_user']   = 1;
			return true;
		}
	}
	return false;
}

?>