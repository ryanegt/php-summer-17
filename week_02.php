<?php

$heroes = [
	'bruce'=>'batman',
	'scott'=>'antman',
	'logan'=>'wolverine',
	'dianna'=>'wonder woman',
	'tony'=>'iron man',
	'peter'=>'spider man',
	'key'=>'value'
];

echo $heroes['tony'];

print "<br>" . $heroes['bruce'];

echo "<br><br>";

foreach($heroes as $alterEgo => $name) {
	echo $alterEgo . " is " . $name . "<br>";
	if($name == 'wolverine') {
		echo "i really hate that guy...<br><br>";
	}	
}

echo "<br><br>";

// echo $_GET['class'];

echo "<br>";


?>

<html>
	<head></head>
	<body>
		<div>
			<h1>Ryan's awesome contact page</h1>
			<br>
			Enter a message below to contact me!
			<form method="POST" action="form_processor.php">
				your name: <input name="myname" type="text" /><br>
				your email: <input name="myemail" type="text" /><br>
				your message: <br><textarea name="mymsg"></textarea><br>
				<input type="submit" />
			</form>
		</div>
	</body>
</html>