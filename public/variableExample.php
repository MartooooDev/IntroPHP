<?php
    //String
    $name               =   "Martin";

    //Number
    //Integer
    $integerNumber      =   12;
    //Double/ Float
    $floatNumber   =   3.14;
    
    //Boolean
    $worldExploded      =   False;
    $iWillLearnPHP     =   True;

    //Arrays

    $array              =   [1, 2, 3,];
    //Object

        class Person{

        }
        
    //Null

    // ----------------------------display------------------------------------------

    echo "<h3>Variables/ gettype ('variableExample')</h3>";

    echo gettype($name)."<br>";
    echo gettype($integerNumber)."<br>";
    echo gettype($floatNumber)."<br>";
    echo gettype($worldExploded)."<br>";
    echo gettype($iWillLearnPHP)."<br>";
    echo gettype($array)."<br>";
    echo gettype(new Person)."<br>";
    echo gettype(null);
?>