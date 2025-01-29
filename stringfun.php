<?php 
    $string = 'This is a string';
    
    /* if(preg_match('/is/', $string)){
        echo 'Match';
    }else{
        echo 'Not Match';
    } */

    // echo strtolower($string);
    // echo strtoupper($string);

    // echo strpos($string, 'is');
    // echo strpos($string, 'is', 4);

    /* $str_replace = str_replace('is', 'are', $string);
    echo $str_replace; */

    $substrreplace = substr_replace($string, 'are', 5, 2);
    echo $substrreplace;

?>