<?php
    $script_name = $_SERVER['SCRIPT_NAME'];
    $host_name  = $_SERVER['HTTP_HOST'];

    // echo $script_name;
    // echo $host_name;

    echo $host_name.''.$script_name;
?>