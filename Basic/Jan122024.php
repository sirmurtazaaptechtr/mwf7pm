<?php
date_default_timezone_set("Asia/Karachi");
function vd ($input) {
    echo "<pre>";
    var_dump($input);
    echo "</pre>";
}
$x = 10;
echo "<p>$x</p>";
$x++; // x = x + 1;
echo "<p>$x</p>";
++$x; // x = x + 1;
echo "<p>$x</p>";

// $z = ++$x - 5;
$z = $x++ - 5;
echo "<p>$x , $z</p>";
echo "<p>$x</p>";
--$x;
echo "<p>$x</p>";
$x--;
echo "<p>$x</p>";
// $z = $x-- - 5;
$z = --$x - 5;
echo "<p>$x , $z</p>";

echo "AND <hr>";
$y = true && true;
vd($y);
$y = true && false;
vd($y);
$y = false && true;
vd($y);
$y = false && false;
vd($y);
echo "OR <hr>";
$y = true || true;
vd($y);
$y = true || false;
vd($y);
$y = false || true;
vd($y);
$y = false || false;
vd($y);
echo "XOR <hr>";
$y = true xor true;
vd($y);
$y = true xor false;
vd($y);
$y = false xor true;
vd($y);
$y = false xor false;
vd($y);

$txt1 = "James";
$txt1 .= " ";
$txt1 .= "Bond";

echo $txt1;

$x = ["Rafay","Rayyan","Abdul Rehman","Mohib","Huzaifa"];
$y = [5=>"Sadaf",6=>"Javeria",7=>"Mahnoor",8=>"Emman",9=>"Arbaaz"];

$z = $x + $y;
vd($z);

$r = 11;
$p = $r > 3?"Bari hai":"Chooti hai";

echo "<p>$p</p>";

$data4mDB = 0;
$mydata = $data4mDB??1;
$myans = $mydata + 55;

echo "<p>$myans</p>";

$num = 120;

if($num % 2 == 0) {
    echo "<p>$num is EVEN</p>";
}else {
    echo "<p>$num is ODD</p>";    
}

$mmarks = 75;
$omarks = 53;
$per = ($omarks/$mmarks)*100;

if($per >= 80) {
    echo "<p>A+</p>";
}elseif($per >= 70) {
    echo "<p>A</p>";    
}elseif($per >= 60) {
    echo "<p>B</p>";    
}elseif($per >= 50) {
    echo "<p>C</p>";    
}elseif($per >= 40) {
    echo "<p>D</p>";    
}else {
    echo "<p>No-Grade</p>";    
}

$a = 200;
$b = 33;
$c = 50;

if ($a > $b && $c < $a ) {
  echo "<p>Both conditions are true</p>";
}

$a = 3;

if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
  echo "<p>$a is a number between 2 and 7</p>";
}

echo "<p>" . date("Y/m/d H:i:s") . "</p>";

$t = date("H");
if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}