<?php

$type_int = 1246;
$type_float =15.65;
$type_bol = true;
$type_string ='Shaik';
$type_array = array("Apple","Orange","Banana");



var_dump($type_int);
echo "<br>";
var_dump($type_string);
echo "<br>";
var_dump($type_array);
echo "<br>";
var_dump($type_float);
echo "<br>";
var_dump($type_bol);

class Car {
    function Car() {
      $this->model = "Elite i20-sportz";
    }
  }
  
  // create an object
  $herbie = new Car();
  
  // show object properties
  echo $herbie->model;
  echo "<br>";
  var_dump($herbie);
  echo "<br>";
  echo strlen("Hello world!");
  echo "<br>";
  echo str_word_count("Hello world!"); 
  echo "<br>";
  echo(rand());
define("MSG"," Hi This is Moin", true);
echo MSG;
  define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
  ]);
  echo cars[0];


?>