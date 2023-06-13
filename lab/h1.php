<?php
$userName = $_GET['h1'];

$greetings = [
    "Hello",
    "Welcome",
    "Hi there",
    "Greetings"
];

$randomIndex = array_rand($greetings);
echo  $greetings[$randomIndex] . " " . $userName ;

?>