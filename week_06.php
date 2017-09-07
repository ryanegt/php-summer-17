<?php

define("DB_HOST","localhost");
define("DB_USER","student");
define("DB_PASSWORD","circus");
define("DB_NAME","student_database");

// using constants instead of variables! yeah!!!

$link = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
	
// week 6

echo "Lets learn databases!";

// connect to a mysql database

function selectQuery($sql) {
	global $link;
	
	$result = mysqli_query($link,$sql);
	
	while($data = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
		$goodData[] = $data;
	}
	return $goodData;
}

echo "<pre>";

// insert data into database

$dateNow = date("Y-m-d H:i:s");

// mysqli_query($link,"INSERT INTO ryan_users (email,password,createdon) VALUES ('some@thing.com','biteme','$dateNow');");

// run a select query and display using our selectQuery function

$query = "SELECT id,email,firstname,lastname,createdon FROM ryan_users;";

print_r(selectQuery($query));

// delete some data... but ONLY some

// mysqli_query($link,"DELETE FROM ryan_users WHERE firstname IS NULL");

// update some 

mysqli_query($link,"UPDATE ryan_users SET firstname='stan',lastname='marsh' WHERE id=3;");

?>