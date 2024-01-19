<?php
$st = 40;
$ed = 50;
for($num=$st;$num<=$ed;$num++) {
    $isPrime = true;
    $db = [];
    for($d=2;$d<$num;$d++) {
        if($num%$d == 0) {
            $isPrime = false;
            array_push($db,$d);
        }
    }    
    if($isPrime) {
        echo "<p>$num is PRIME</p>";
    }else {
        echo "<p>$num is not PRIME because it is divisible by ";
        foreach($db as $n) {
            echo "$n | ";
        }
        echo "</p>";
    }
}

function myfun1 () {
    echo "<p>How do you do?</p>";
}
function myfun2 ($name) {
    echo "<p>Dear $name, How do you do?</p>";
}
function myfun3 ($name,$age) {
    echo "<p>Dear $name, How do you do? You are $age years old</p>";
}
function myfun4 () {
    return "Good Bye";
}
myfun2("Ali Raza");
myfun2("Sara Khan");
myfun2("Sanaullah");
myfun3("Huzaifa",18);
// $data = myfun4();
// echo $data;
echo myfun4();