<?php
    #Function - Block of code that can be repeadly called

    /*
        Camel Case- myFunction()
        Lower Case - my_function()
        Pascal Case - MyFunction()- usually used for classes
    */

    //create simple function
    function simpleFunction(){
        //echo 'Hello Ron';
    }
    //run simple function
    simpleFunction();

    //function with parameter
    function sayHello($name){
        //echo "Hello $name<br>";
    }
    //sayHello('Smith');
    //sayHello('Mary');

    //return value
    function addNumbers($num1, $num2){
        //echo $num1 + $num2;
        //return $num1 + $num2;
    }
    addNumbers(20222,2453);

    //By Reference
    $myNum = 10;
    function addFive($num){
        $num += 5;
    }

    function addTen(&$num){
        $num += 10;
    }
    addFive($myNum);
    echo "Value: $myNum<br>";

    addTen($myNum);
    echo "Value: $myNum<br>";

?>