<?php
$txt = "Javeria Shafique";

echo "<p>" . strtoupper($txt) . "</p>";
echo "<p>" . strtolower($txt) . "</p>";
echo "<p>" . str_replace("Shafique","Sheikh",$txt) . "</p>";
echo "<p>" . strrev($txt) . "</p>";

$txt2 = "  My    Name   is   Hussain ";
echo "<pre> $txt2 </pre>";
echo "<pre>" . trim($txt2) . "</pre>";

$txt3 = "Huzaifa, Arbaz, Mohib, Sadaf, Javeria, Abdul Rehman, Rafay, Hussain, Basit, Jahanzaib, Junaid, Rayan, Uzair, Faizan, Shahzaib";

$names = explode(", ",$txt3);

echo "<pre>";
print_r($names);
echo "</pre>";

echo "<p>Ms. " . $txt . "</p>";
echo "<p>Ms. $txt</p>";

$txt4 = "The Earth goes around the Sun";

echo "<p>" . substr($txt4,4,5) . "</p>";
echo "<p>" . substr($txt4,26,3) . "</p>";
echo "<p>" . substr($txt4,26) . "</p>";
echo "<p>" . substr($txt4,strlen($txt4)-3,3) . "</p>";
echo "<p>" . substr($txt4,strlen($txt4)-3) . "</p>";
echo "<p>" . substr($txt4,-3,3) . "</p>";
echo "<p>" . substr($txt4,26,-1) . "</p>";

$num1 = 3; //Integer
$num2 = 3.14; //Float
$num3 = "12.75"; //Number Strings

function vd ($input) {
    echo "<pre>";
    var_dump($input);
    echo "</pre>";
}

vd($num1);
vd($num2);
vd($num3);

echo vd(is_integer($num1));
echo vd(is_float($num2));

$num4 = 1.09876543210123456789e300;
vd($num4);