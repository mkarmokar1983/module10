<?php

// Write a PHP program that takes an array of strings as input. Your program should iterate over each string in the array and perform the following operations:


$strings = ["Hello", "World", "PHP", "Programming"];
$vowel = array('a', 'e', 'i', 'o', 'u');

// Loop over array
foreach ($strings as $string) {

    $count = 0;
    // Loop over array Items
    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array(strtolower($string[$i]), ['a', 'e', 'i', 'o', 'u'])) {
            $count++;
        }
    }

    echo "Original String: {$string}, " . "Vowel Count: {$count}, " . "Reversed String: " . strrev($string) . "\n";
}


