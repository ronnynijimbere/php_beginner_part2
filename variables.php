<?php 
    //single line comment
    #single line comment

    /*
    multiline comment
    */

    #Variable rules
    /*
     - Prefix $ = use the dollar sign to start your variables
     - variable has to start with a letter or underscore
     - Only letters, numbers and underscores
     - case sensitive

    */

    #Data types

    /*
        strings
        Intergers
        floats
        booleans
        Objects
        Null
        Resource
    */


    $output = 'Hello Ron';
    $num1 = 4;
    $num2 = 7;
    $sum = $num1 + $num2;
    //echo $sum;   
    
    $string1 = 'liverpool';
    $string2 = 'fc';
    $greeting = $string1 .' '. $string2;
    $greeting2 = "$string1 $string2";
    $string3 = 'They\'re Here';
    //echo $string3;
    
    //echo $greeting2;
    
    $float1 = 5.66;
    $bool = true;
     //echo $output;

    //creating a constant
    define('GREETING', 'Hello Everyone');
    echo GREETING;
   
?>