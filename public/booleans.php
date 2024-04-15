<?php

echo "<h3> Booleans </h3>";
echo "<p> (defined in 'booleans.php')</p>";

    $_SESSION['logged'] = False;

    #Truthy; have some value on the variable, behaving as a True
    #$_SESSION['logged'] = "asdasda";

    if($_SESSION){
        echo "Is logged";
    }

?>