<?php 
    // This is a single-line comment

    # This is also a single-line comment

    /* This is a
        multi-line
        comment */

    echo "<h1>Welcome to PHP</h1>";
    
    $x = 5 + 15 /* + 5 */;
    echo "<p>$x</p>";
    print "<p>$x</p>";
    var_dump($x);
    
    $x = "Eman Saleem";
    echo "<pre>";
    var_dump($x);
    echo "</pre>";

    $x = true;
    echo "<p>$x</p>";

    $x = false;
    echo "<pre>";
    var_dump($x);
    echo "</pre>";

    $name = "Abdul Rehman";
    // echo "I love $name!";
    echo "I love " . $name . "!";

    $num1 = 15;
    $num2 = 5;

    $res = $num1 + $num2;
    echo "<p>$res</p>";

    

?>