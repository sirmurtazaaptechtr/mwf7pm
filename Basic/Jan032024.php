<?php 
$name = "";
$age = "";

function myfun () {
    global $name, $age;
    $name = "Ali Raza";
    $age = 18;
    echo $name . " is " . $age;
}
myfun();

echo $name . " is " . $age;

$x = 5; // global scope

function myTest() {
    global $x;     
    $x *= 2; //$x = $x * 2;

  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";

echo "<pre>";
print_r($GLOBALS);
echo "</pre>";

echo $GLOBALS['name'] . "<br />";

function disp () {
    echo "Dear " . $GLOBALS['name'] . " you are " . $GLOBALS['age'] . " years old.";
}

disp();

$var = "";

$var = print $name;
echo $name, $age;

print "<br />" . $var ;
echo "<pre>";
var_dump($var);
echo "</pre>";

?>