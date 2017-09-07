<html>
<!-- php files can contain HTML markup AND php commands, who would have thought? -->
<!-- but once we open php tags on the page, everything inside them has to be valid php syntax: -->
	
<?php

// Setting variables! Notice we are using camelcase
$firstName = "Ryan";
$lastName  = "Rodd";

$myName = "RPR";

// There are many ways to concatenate variables, strings and code output togehter
// We'll be using this mostly:
echo "<h1>hello, I'm $firstName</h1>";

// But there's also:
echo '<h2>hello, I\'m ' . $firstName . '</h2>';
echo "<h2>hello {$firstName}, this is also concatenation</h2>";

// We can mash two variables together
$fullName = $firstName.$lastName;

// But that would produce a variable with: RyanRodd so lets
// Do it correctly:
$fullNameCorrect = $firstName . "  " . $lastName;

// Heres some sweet if-statement syntax
if($myInitials) {
	echo "My initials are ".$myName;
}

/*
 * Write a multiline comment
 * cause i'm cool
 */

// Lets use some variables to do some cool maths!
$myAge = 32;

echo "<br> My age is $myAge";

$myAge++; // $myAge = $myAge + 1;
$myAge++;
echo "<br>In ".ucwords("august").", I'll be $myAge";

if ($myAge > 33) {
	echo "<h1>wow sir, you are old!</h1>";
}

// Lets define an array! Whats an array?
$students = [
	'David',
	'Michele',
	'Rachel',
	'Thecoolkid',
];

echo $students[3];
echo "<br>MOAR STUDENTS:<br>";

// We can use a for loop to check all the elements of an array
for($i=0;$i<sizeof($students);$i++) {
	echo $students[$i] . "<br>";
}

echo "<br>But with foreach:<br>";

// But the foreach loops is wayyyy easier to use:
foreach($students as $name) {
	echo $name ."<br>";
}

// These were all super boring examples. But PHP has plenty of spicey and coool functionality:
// mail($to,$subject,$body);
$result=mail("ryanrodd@gmail.com","This is an email, hi there!","and this is the body of the email OMG OMG OMG.","From:no-reply@circuslabs.net");
if (!$result) {
    echo error_get_last()['message'];
}

?>

<!-- and thats the end of our php folks! -->
</html>