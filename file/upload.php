<?php
    if(isset($_POST['submit'])){
        $filename = $_FILES['filename']['name'];
        $filetype = $_FILES['filename']['type'];
        $filesize = $_FILES['filename']['size'];

        $tmp_loc = $_FILES['filename']['tmp_name'];

        $dotpos = strpos($filename,'.')+1;
        $ext = substr($filename, $dotpos);
        
        $uploc = 'images/';

        if(!empty($filename)){
            if($ext == 'jpg'){
                if($filetype == 'image/jpeg'){
                    if($filesize < 90000){
                        move_uploaded_file($tmp_loc, $uploc.$filename);
                        echo 'uploaded successfully!';
                    }else{
                        echo 'File size less than 90000 bytes';
                    }
                }else{
                    echo 'Select a image';
                }
            }else{
                echo 'Select a jpg image file';
            }
        }else{
            echo 'Select a File';
        }
    }
?>

<form action="upload.php" method="POST" enctype="multipart/form-data">
    Select Image
    <input type="file" name="filename"> <br><br>
    <input type="submit" value="Upload" name="submit">
</form>