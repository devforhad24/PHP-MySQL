<?php
    $string = "This is a string";
    $stringTwo = "This is <img src='#'> a image";

    // $wordcount = str_word_count($string);
    // echo $wordcount;

    // $wordcount = str_word_count($string,1);
    // print_r($wordcount);

    // $wordcount = str_word_count($string, 2);
    // print_r($wordcount);

    // $wordcount = str_word_count($string, 1, '.');
    // print_r($wordcount);

    /* $shuffle = str_shuffle($string);
    echo $shuffle; */

    /* $substr = substr($string, 0, 3);
    echo $substr; */

    /* $reverse = strrev($string);
    echo $reverse; */

    /* $strlen = strlen($string);
    echo $strlen; */

    $getcode = htmlentities($stringTwo);
    // echo $getcode;
    $addslashes = addslashes($getcode);
    echo $addslashes;

?>