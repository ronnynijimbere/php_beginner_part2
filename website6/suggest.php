<?php
//people array @todo - Get from DB
$people[] = "Ronny";
$people[] = "Mike";
$people[] = "Trevor";
$people[] = "Levin";
$people[] = "Sara";
$people[] = "Lana";
$people[] = "Rusev";
$people[] = "Rollins";
$people[] = "Sasha";
$people[] = "Randy";
$people[] = "Kevin";
$people[] = "Makelele";
$people[] = "Poe";
$people[] = "Danny";
$people[] = "Louis";
$people[] = "Paul";
$people[] = "John";
$people[] = "Mary";
$people[] = "Joseph";
$people[] = "Will";
$people[] = "Dennise";
$people[] = "Kelly";
$people[] = "Brian";
$people[] = "Felicia";

//Get query string

$q = $_REQUEST['q'];
$suggestion = '';

//get Suggestions
if($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach($people as $person) {
        if(stristr($q, substr($person, 0, $len))){
            if($suggestion === "") {
                $suggestion = $person;
            } else {
                $suggestion .= ", $person";
            }
        }
    }
}
    echo $suggestion === "" ? "No Suggestion" : $suggestion;

?>