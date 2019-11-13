<?php
    #Conditionals

    /*
        ==
        ===
        <
        >
        <=
        >=
        !=
        !==
    */

    /*$num = 6;
    if($num == 5){
        echo '5 passed';
    } elseif($num == 6) {
        echo '6 passed';   
    } else {
        echo 'did not pass';
    }*/

    #Nesting IF

    $num = 5;
    /*if($num > 4){
        if($num < 10){
            echo "$num passed";
        }
    }*/

    /* Logical Operators

        and &&
        or ||
        xor

    */

    /*if($num > 6 XOR $num < 10) {
        echo "$num passed";
    }*/

    $favColor = 'blue';
    switch($favColor){
        case 'blue' :
            echo 'your fav color is blue';
            break;
        case 'red' :
            echo 'your fav color is red';
            break;
        case 'yellow' :
            echo 'your fav color is yellow';
            break;
        default:                
            echo 'your fav color is nothing';
           
    }


?>