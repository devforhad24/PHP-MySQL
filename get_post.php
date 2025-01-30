<!-- superglobal variables -->
<?php
    if(isset($_GET['username']) AND isset($_GET['password']) ){
        $username = $_GET['username'];
        $password = $_GET['password'];

        if($username == 'forhad' AND $password == '123'){
            echo 'Login Successful';
        }else{
            echo 'Faield to login!';
        }

    }

?>

<form action="get_post.php" method="GET">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" value="Log In">
</form>