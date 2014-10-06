<?php

echo 'Hello! Lets play a guessing game. Guess a number between 1 and 100! ';

$answer = mt_rand(1, 100);

fwrite(STDOUT, 'What\'s your best guess? ');

$guess = trim(fgets(STDIN));

$count = 1;

// While user guess is equal to generated number
	// keep allowing guesses


while($guess != $answer) {
	if($guess < $answer) {
		fwrite(STDOUT, 'Why don\'t you guess a higher number....');
		$guess = trim(fgets(STDIN));
	} elseif($guess > $answer) {
		fwrite(STDOUT, 'Why don\'t you guess a litle lower....');
		$guess = trim(fgets(STDIN));
	}
	$count++;
} 

echo 'Winner Winner Chicken Dinner!' . "\n" . "It took you $count guesses \n";

if($count <= 5) {
	echo "Mighty impressive fine chap! \n";
} elseif($count > 5 && $count <= 8) {
	echo "That is decent guessing good fellow, but not the best. \n"; 
} elseif($count > 8 && $count <= 20) {
	echo "Well dear sir, you were just short of guessing all of the numbers... \n";
}


 

