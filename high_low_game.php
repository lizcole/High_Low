<?php

echo 'Hello! Lets play a wonderful guessing game, where I know the number and you dont. ';

if($argc == 3){
	echo "Guess a number between {$argv[1]} and {$argv[2]}. \n";
	}
		$answer = mt_rand($argv[1], $argv[2]);

fwrite(STDOUT, 'What is your guess? ');

$count = 0;

do {
	// Prompt User For Guess
	$guess = trim(fgets(STDIN));
	$count++;
		// Check Guess
		if ($guess < $answer) {
			fwrite(STDOUT, 'WRONG! Why don\'t you guess a higher number....');
		}
		elseif ($guess > $answer) {
			fwrite(STDOUT, 'WRONG! Why don\'t you guess a litle lower....');
		}
		else {
			echo 'Winner Winner Chicken Dinner!' . "\n" . "It took you $count guesses \n";
		}
	} while($guess != $answer);

if($count <= 5) {
	echo "That is mighty impressive guessing fine chap! \n";
} elseif($count > 5 && $count <= 8) {
	echo "That is decent guessing good fellow, but not the best. \n"; 
} elseif($count > 8 && $count <= 20) {
	echo "Well dear sir, you were just short of guessing all of the numbers... \n";
}


 

