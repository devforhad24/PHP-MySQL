<?php
/* example one */
    // $name = array('forhad', 'jannat', 'nur', 'riyad');

    /* foreach($name as $row){
        echo $row .'</br>';
    } */

    $name = array('man' => array('forhad', 'riyad'),
                  'woman' => array('jannat', 'nur') );
    
    foreach($name as $gender => $inner_array){
        echo '<strong>'.$gender .'</strong></br>';

        foreach($inner_array as $person_name){
            echo $person_name.'</br>';
        }

    }

?>