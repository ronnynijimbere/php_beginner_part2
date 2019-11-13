<?php
    //echo date('d'); //date of the month
    //echo date('l'); //day of the week
    //echo date('m'); //month of the year
    //echo date('Y'); //Year

    //echo date('Y/m/d'); //date of the month

    //echo date('h'); //hour
    //echo date('i'); //minutes
    //echo date('s'); //seconds
    //echo date('a'); //AM or PM

    //set timezone
    //date_default_timezone_set('Pretoria');

    //echo date('h:i:sa'); 

    $timestamp = mktime(10, 14, 21, 10, 1986);
    //echo $timestamp;
    //echo date('m/d/Y h:i:sa', $timestamp); //date of the month

    $timestamp2 = strtotime('7:00 pm March 21 1986');
    $timestamp3 = strtotime('tomorrow');
    $timestamp4 = strtotime('next Saturday');
    $timestamp5 = strtotime('+2 Months');
    //echo $timestamp2;

    echo date('m/d/Y h:i:sa', $timestamp5);
?>    