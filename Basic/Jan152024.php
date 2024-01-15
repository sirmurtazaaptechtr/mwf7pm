<?php
$num1 = 10;
$num2 = 2;

$ch = 5;
switch ($ch)
{
    case 1:
        $res = $num1 + $num2;
        echo "<p>$num1 + $num2 = $res</p>";
        break;
    case 2:
        $res = $num1 - $num2;
        echo "<p>$num1 - $num2 = $res</p>";
        break;
    case 3:
        $res = $num1 * $num2;
        echo "<p>$num1 x $num2 = $res</p>";
        break;
    case 4:
        $res = $num1 / $num2;
        echo "<p>$num1 / $num2 = $res</p>";
        break;
    default:
        echo "<p>Invalid Choice! $ch. Enter (1-4)</p>";
}
$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
// for($i=1;$i<=3;$i++) {
//     echo "<p>$i. Syed Murtaza Hussain</p>";
// }
// $i = 1;
// while($i<=3) {
//     echo "<p>$i. Syed Murtaza Hussain</p>";
//     $i++;
// }
$i = 1;
do {
    echo "<p>$i. Syed Murtaza Hussain</p>";
    $i++;
}while($i<=3);

$names = ["Rafay","Rayyan","Abdul Rehman","Mohib","Huzaifa","Sadaf","Javeria","Mahnoor","Emman","Arbaz","Junaid","Uzair"];

// for($i=0;$i<count($names);$i++) {
//     echo "<p>" . ($i+1) . " - Dear " . $names[$i] . ", How do you do?</p>";
// }

foreach($names as $index=>$value) {
    echo "<p>" . ($index+1) . " - Dear $value, How do you do?</p>";
}

for($i=1;$i<=10;$i++) {
    if($i==5) {
        // break;
        continue;
    }
    echo "<p>$i<p>";
}

for($i=1;$i<=10;$i++) {
    if($i%2 !== 0) {        
        continue;
    }
    echo "<p>$i<p>";
}
