<?php
echo "<h2>The numbers:</h2>";
    $a = 15;
    echo "$a, ";
    $b = 42;
    echo "$b, ";
    $c = 27;
    echo "$c <br>";

    if ($a >= $b && $a >= $c) {
        echo "$a is the largest number.";
    } elseif ($b >= $a && $b >= $c) {
        echo "$b is the largest number.";
    } else {
        echo "$c is the largest number.";
    }
?>
