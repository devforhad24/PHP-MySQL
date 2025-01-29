<?php

    if(isset($_POST['string']) AND isset($_POST['find']) AND isset($_POST['replace']) ){
        $string = $_POST['string'];
        $find = $_POST['find'];
        $replace = $_POST['replace'];

        $offset = 0;
        $strlen = strlen($find);

        if(!empty($string) AND !empty($find) AND !empty($replace)){
            while($strpos = strpos($string, $find, $offset)){
                $offset = $strpos + $strlen;
                $string = substr_replace($string, $replace, $strpos, $strlen);
            }
            echo $string;
        }else{
            echo 'Fill all fields!';
        }

    }

?>

<form action="findreplace.php" method="POST">
    <textarea name="string" col="6" rows="5"></textarea> <br><br>
    Find: <input type="text" name="find"> <br><br>
    Replace: <input type="text" name="replace"> <br><br>
    <input type="submit" value="Submit">
</form>