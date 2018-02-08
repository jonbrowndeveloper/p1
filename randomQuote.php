<?php

$randomQuotes = array(
	"I have never let my schooling interfere with my education.",
	"Travel is fatal to prejudice, bigotry, and narrow-mindedness.",
	"If you tell the truth, you don't have to remember anything.",
);

echo $randomQuotes[mt_rand(0,count($randomQuotes)-1)];

?>

