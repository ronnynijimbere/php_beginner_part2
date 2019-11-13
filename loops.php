<?php
    #loops -execute code set number of times
    /* 4 types of loops
    -For
    -While
    -Do..While
    -Foreach
    */

    #For Loop (used if u know the number of times its going to be executed)
    # @params - initialise, condition, increment

    for($i = 0;$i < 10; $i++){
        //echo 'Number ' . $i;
        //echo '<br>';
    }

    #While Loop
    # @params - condition (if you dont know how long it will execute)

    $i = 0;

    while($i < 10){
        //echo $i;
        //echo '<br>';
        $i++;
    }

    #Do while loop
    # @params -condition(its always gonna run once no matter what)

    $i = 0;
    do{
        //echo $i;
        //echo '<br>';
        $i++;
    }
    while($i < 10);

    #Foreach- works with arrays

    /*$people = ['Simon', 'Mike', 'Ronny', 'Cathy'];
    foreach($people as $person){
        echo $person;
        echo '<br>';
    }*/

    $people = ['Simon' => 'simon@gmail.com', 'Mike' => 'mike@gmail.com', 'Ronny' => 'ron@gmail.com', 'Cathy' => 'cat@gmail.com'];
    foreach($people as $person => $email){
        echo $person . ': ' .$email;
        echo '<br>';
    }

?>