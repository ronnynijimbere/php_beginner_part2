<?php
    #Array - Variables that hold multiple values

    /*
        -indexed
        -associative
        -Multi-dimensional
    */

    //Indexed
    $people = array('Ronny', 'Keyshia', 'Kiki');
    //$ids = array(50, 88, 120);
    $cars = ['BMW', 'Mercedes', 'Ferrari'];
    //echo $cars[1];
    //adding to an array
    //echo $cars[3] = 'Red Bull';
    //echo $cars[] = 'Toyota';

    //echo count($cars);

    //popular for debbuging
    //print_r($cars);
    //var_dump($cars);

    //echo $ids[0];
    //echo $people[2];

    //Associative Array- allows to define the key and the value
    //assign the key to any data type we want

    $people1 = array('Ronny' => 33, 'Jimmy' => 24, 'Michelle' => 27);
    //echo $people1['Michelle'];

    $ids = [44 => 'John', 12 => 'Tommy', 17 => 'Kevin'];
    //echo $ids[12];
    $people1['Sue'] = 24;
    //echo $people1['Sue'];

    //Multi-dimensional (An Array Within an array)
    $cars1 = array(
        array('Chevrolet', 25, 20),
        array('McLaren', 10, 7),
        array('Polo Classic', 75, 10)
    );
    echo $cars1[0][2];



?>