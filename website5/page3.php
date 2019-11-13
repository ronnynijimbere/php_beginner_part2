<?php
    $user = ['name' => 'James', 'email' => 'james@gmail.com', 'age' => 22];

    $user = serialize($user); 
    
    setcookie('user', $user, time() + (86400 * 30));

    $user = unserialize($_COOKIE ['user']);

    //echo $user['email'];

    print_r($user);


?>