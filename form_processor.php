<?php


echo "<br><br>";
print_r($_POST);

if($_POST['mymsg'] == "") {
	die("Please enter a message!");
}

$email = $_POST['myemail'];

if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
	die("Please enter a valid email!");
}


echo "THANKS FOR SUMBITTING THE FORM ".$_POST['myname'];

$body = "hello";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: Circus Labs<no-reply@circuslabs.net>\r\n";

mail("ryanrodd@gmail.com","someone contacted you",$body,$headers);


?>