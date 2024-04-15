<?php

    echo "<h2> If and else </h2>";
    echo "<p>(defined in 'ifelse.php')</p>";

    $number1= 10;
    $number2= 20;
    $aff1= True;
    $aff2= False;

    // standard if-else statement
    if ($number1 > $number2){
        echo "Number1 is greater than number2 <br>";
    } else {
        echo "Number2 is greater than number1 <br>";
    }

    //alternative, simply-er if-else statement;
    echo ($number1 > $number2) ? 'num1 > num2' : 'num2 > num1';
?>