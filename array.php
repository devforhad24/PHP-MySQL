<?php
    /* associative array */
    // $name = array('forhad', 'jannat', 'riyad', 'nur');
    // $name = array('forhad'=> 25, 'jannat' => 23, 'riyad' => 20, 'nur' => 18);

    // print_r($name);
    // var_dump($name);
    // echo $name[2];

    // echo $name ['jannat'];

    /* multidimential array */
    $name = array('man' => array('forhad', 'riyad'),
                  'woman' => array('jannat', 'nur') );
    
    // print_r($name);
    echo $name ['man'][1];

?>