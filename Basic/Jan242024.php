<?php
declare(strict_types=1); // strict requirement
function myfun1 () {
    echo "<p>Hi There</p>";    
}

function myfun2(string $name)  {
    echo "<p>Hi $name, How do you do?</p>";
}

function myfun3(int $num1,int $num2) : int {
    // echo "<p>$num1 + $num2 = " . $num1+$num2 . "</p>";
    return $num1 + $num2;
}

function myfun4(int $num1,int $num2) : string {
    return "<p>$num1 + $num2 = " . $num1+$num2 . "</p>";
    // return $num1 + $num2;
}

myfun1();
myfun2("Ali Raza");
myfun2("Rayyan");
$res = myfun3(12,14);
echo "<p>$res</p>";

echo "<p>" . myfun3(1,5) . "</p>";

myfun2("123");

echo myfun3(1,3);

echo myfun4(54,22);

$a = 12;
$b = 15;

function Swap2Values ($a,$b) {
    echo "<p>Inside BS : $a,$b</p>";
    $temp = $a;
    $a = $b;
    $b = $temp;
    echo "<p>Inside AS : $a,$b</p>";
}

function Swap2Values2OD (&$a,&$b) {
    echo "<p>Inside BS : $a,$b</p>";
    $temp = $a;
    $a = $b;
    $b = $temp;
    echo "<p>Inside AS : $a,$b</p>";
}

echo "<p>Outside BS : $a,$b</p>";
Swap2Values($a,$b);
echo "<p>Outside AS : $a,$b</p>";

echo "<p>Outside BS : $a,$b</p>";
Swap2Values2OD($a,$b);
echo "<p>Outside AS : $a,$b</p>";

function Sum ($a,$b,$c,$d) {
    return $a+$b+$c+$d;
}

echo "<p>" . Sum(1,2,3,4) . "</p>";

function SV(...$nums) {
    $sum = 0;
    $st = 0;
    $ed = count($nums);
    
    for($cnt = $st; $cnt < $ed;$cnt++){
        $sum += $nums[$cnt]; 
    }

    return $sum;
}

echo "<p>" . SV(1,2,3) . "</p>";
echo "<p>" . SV(6,7,8,1,2,3) . "</p>";
echo "<p>" . SV(6) . "</p>";
echo "<p>" . SV() . "</p>";


$names = "Ali Raza";
$names = "Razzaq";

$names = ["Ali Raza","Razzaq"];
$names2 = ["Std007"=>"Ali Raza","Std009"=>"Razzaq"];

echo "<p>" . $names[0] . "</p>";
echo "<p>" . $names[1] . "</p>";


foreach($names as $index => $name) {    
    echo "<p>$name is at $index</p>";
}

foreach($names2 as $index => $name) {    
    echo "<p>$name is at $index</p>";
}