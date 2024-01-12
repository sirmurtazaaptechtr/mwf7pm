<?php
function vd ($input) {
    echo "<pre>";
    var_dump($input);
    echo "</pre>";
}
 echo "<p>" . pi() . "</p>";

 echo "<p>" . min(16,18,19,18,18,22,17,20,17,19,16,17,19,19,21,20) . "</p>";

 echo "<p>" . max(16,18,19,18,18,22,17,20,17,19,16,17,19,19,21,20) . "</p>";

 echo "<p>" . abs(-1.28) . "</p>";

 echo "<p>" . sqrt(81) . "</p>";

 echo "<p>" . round(0.81) . "</p>";

 echo "<p>" . round(0.18) . "</p>";

 echo "<p>" . rand() . "</p>";

 echo "<p>" . rand(0,10) . "</p>";

 $myname = "Syed Murtaza Hussain";
 echo "<p>$myname</p>";
 
 define("MY_NAME","Syed Murtaza Hussain"); 
 echo "<p>" . MY_NAME . "</p>";

 echo "<p>" . __FILE__ . "</p>";

 echo "<p>" . __LINE__ . "</p>";

 $num1 = 10;
 $num2 = 5;

 $res = $num1 + $num2;
 echo "<p>$num1 + $num2 = $res </p>";

 $res = $num1 - $num2;
 echo "<p>$num1 - $num2 = $res </p>";

 $res = $num1 * $num2;
 echo "<p>$num1 * $num2 = $res </p>";

 $res = $num1 / $num2;
 echo "<p>$num1 / $num2 = $res </p>";

 $res = $num1 % $num2;
 echo "<p>$num1 % $num2 = $res </p>";

 $res = $num1 ** $num2;
 echo "<p>$num1 ^ $num2 = $res </p>";

 $x = $y = "";  
 $y = 5;
 $x = $y;
 echo "<p>$x,$y</p>";
 
 $x += $y;// $x = $x + $y;
 echo "<p>$x,$y</p>";
 
 $x -= $y;// $x = $x - $y;
 echo "<p>$x,$y</p>";

 $x *= $y;// $x = $x * $y;
 echo "<p>$x,$y</p>";

 $x /= $y;// $x = $x / $y;
 echo "<p>$x,$y</p>";

 $x %= $y;// $x = $x % $y;
 echo "<p>$x,$y</p>";

 $x **= $y;// $x = $x ** $y;
 echo "<p>$x,$y</p>";

 $x = 10;
 $y = 10;
vd($x==$y); 

 $x = "10";
 $y = 10;
vd($x==$y);

 $x = "10";
 $y = 10;
vd($x===$y); 

 $x = "10";
 $y = 10;
vd($x!==$y); 

 $x = "10";
 $y = 10;
vd($x!=$y); 

 $x = 10;
 $y = 5;
vd($x<$y); 

 $x = 10;
 $y = 5;
vd($x>$y); 

 $x = 10;
 $y = 10;
vd($x>=$y); 
vd($x<=$y); 

 $x = 10;
 $y = 10;
 vd($x<=>$y); 
 $x = 1;
 $y = 10;
vd($x<=>$y); 
 $x = 10;
 $y = 1;
vd($x<=>$y); 




