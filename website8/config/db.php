<?php

    //Create Connection
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    //check connection
    if(mysqli_connect_errno()){
        //connection failed
        echo 'failed to connect to MySQL' . mysqli_connect_errno();
    }


?>