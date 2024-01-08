<?php

function vd ($input) {
    echo "<pre>";
    var_dump($input);
    echo "</pre>";
}

$myVari = NULL;
vd($myVari);

$myVari = 15;
vd($myVari);

$myVari = PHP_INT_MAX;
vd($myVari);

$myVari = 3.14;
vd($myVari);

$myVari = PHP_FLOAT_MAX;
vd($myVari);

$myVari = "Arbaaz";
vd($myVari);

$myVari = true;
vd($myVari);

$myVari = false;
vd($myVari);

$myVari = [NULL, 15, 3.14, "Arbaaz", true, false];
vd($myVari);

$num1 = 15;
$num2 = 2;

$res = (int)($num1 / $num2);
echo "<p>$res</p>";

$num1 = "15";
$num2 = "2";

$res = (int)$num1 + (int)$num2;
echo "<p>$res</p>";
echo '<p>$res</p>';

$text = "Abdul Rehman Faisal Ahmed";

$len = strlen($text);
echo "<p>\"$text\" has $len characters in it.</p>";

$wc = str_word_count($text);
echo "<p>\"$text\" has $wc words in it.</p>";

$pos = strpos($text,"Ahmed");
echo "<p>In \"$text\" Word \"Ahmed\" is at $pos.</p>";


?>