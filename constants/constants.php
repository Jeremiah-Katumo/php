<?php

// create a constant, use the define() function.
define("GREETING", "Welcome to My Home");
echo GREETING;

// create a constant with a case insensitive name
// define("MEETING", "Welcome to My Home", true);
// echo meeting;

// create a constant using a variable
$myVariable = "WORLD";
define("HELLO", "Hello, $myVariable");
echo HELLO;

// create an array constant
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
  ]);
  echo cars[0];


const MYCAR = 'Ford';
echo MYCAR;

// constants are global
define("EATING", "Welcome to W3Schools.com!");

function myTest() {
  echo EATING;
}

myTest();
