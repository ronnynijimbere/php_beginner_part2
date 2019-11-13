<?php 
    #substr ()
    #Returns a portion of a string

    //$output = substr('Hello', 1, 3);
    //$output = substr('Hello', -2);
    //echo $output;

    #strlen()
    #Returns the lengh of a string
    //$output = strlen('Hello Nijimbere');
    //echo $output;

    #strpos
    # find the position of the first occurrence of a substring
    //$output = strpos('Hello Nijimbere', 'j');
    //echo $output;

    #strrpos
    # find the position of the last occurrence of a substring
    //$output = strrpos('Hello Nijimbere', 'j');
    //echo $output;

    #trim()
    # trims white space
    //$text = 'Hello babes                     ';
    //var_dump($text);
    //$trimmed = trim($text);
    //var_dump($trimmed);

    #strtoupper
    #makes everything uppercase
    //$output = strtoupper('Hello Nijimbere');
    //echo $output;

    #strtolower
    #makes everything lowercase
    //$output = strtolower('Hello Nijimbere');
    //echo $output;

    #ucwords()
    #Capitalize the first letter of every word
    //$output = ucwords('babes hello');
    //echo $output;

    #str_replace() - takes 3 params
    #Replace all occurrences of a search string with a replacement    
    //$text = 'Hello babes'; 
    //$output = str_replace('babes', 'cindy', $text);
    //echo $output;

    #is_string
    #check if string
    //$val = 'Hello';
    //$output = is_string($val);
   // echo $output;

    /*$values = [true, false, null, 'ccc', 24, '24', 25.5, '25.5','',' ', 0, '0'];
    foreach($values as $value){
        if(is_string($value)){
            echo "{$value} is a string<br>";
        }
    }*/

    #gzcompress()
    #Compress a string

    $string = "However, the most popular one is called REST 
    defined in 2000 by Roy Fielding. It's an architecture 
    that leverages the HTTP protocol to enable communication 
    between a client and a server application. A server application 
    that offers a REST API is also called a RESTful server. 
    Servers that don't follow the REST architecture a 100% 
    are rather called RESTish than RESTful. In the following,
    we are going to implement such REST API for our Express
    server application, but first let's get to know the tooling 
    that enables us to interact with a REST API. ";

    $compressed = gzcompress($string);
    //echo $compressed;

    //uncompress
    $original = gzuncompress($compressed);
    echo $original;

?>