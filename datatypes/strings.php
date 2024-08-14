<?php 

// string length
echo strlen("Hello world!");

// word count
echo str_word_count("Hello world!");

// search for text within a string
echo strpos("Hello world!", "world");

// Modify Strings
// Upper case
$x = "Hello World!";
echo strtoupper($x);

// lowercase
$y = "Hello World!";
echo strtolower($y);

// replace string
$x = "Hello World!";
echo str_replace("World","Lovely", $x);

// reverse a string
$str = "Hello World!";
echo strrev($str);

// remove whitespace
echo trim($x);

// convert string into Array
//Use the print_r() function to display the result:
$x = "Hello World!";
$y = explode(" ", $x);

//Use the print_r() function to display the result:
print_r($y);

// slicing sttrings
echo substr($x,-4,2);