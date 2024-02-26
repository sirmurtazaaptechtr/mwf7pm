<?php 
    function d_fun ($dividend, $divisor) {
        if ($divisor == 0) {
            throw new Exception("Division by Zero");
        }
        return ($dividend/$divisor);
    }

    try {
        echo d_fun (15,5) . "<br>";
        echo d_fun (14,0) . "<br>"; 
        echo d_fun (12,4) . "<br>"; 
    } catch (Exception $ex) {
        // echo "Can't Divide by Zero";
        echo $ex->getMessage() . "<br>";
        // echo $ex->getCode() . "<br>";
        // echo $ex->getLine() . "<br>";
        // echo $ex->getFile() . "<br>";
    } finally {
        echo "<h6>The End</h6>";
    }
?>