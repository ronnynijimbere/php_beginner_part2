<?php

    setcookie('username', 'Ronny', time() + (86400 * 30)); 


    //Delete Cookie
    setcookie('username', 'Ronny', time() - 3600);

    if(count($_COOKIE) > 0){
        echo 'There are ' . count($_COOKIE) . ' cookies saved <br>';
    } else {
        echo 'There are no cookies saved';
    }


    if(isset($_COOKIE['username'])){
        echo 'User ' . $_COOKIE['username'] . ' is set<br>
            ';

    } else {
        echo 'User is not set';
    }
?>