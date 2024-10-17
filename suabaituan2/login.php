<?php
include "user.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <h1>Login Form</h1>
    <form action="" method="post">
        Username <input type="text" name="username" id=""> <br>
        Password <input type="password" name="password" id=""> <br>
        <input type="submit" value="Login">
    </form>
    <?php
    if(isset($_POST['username'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user1 = new User($username, $password, NULL, NULL);
        if($user1->login($username, $password)){
            echo "Logged in successfully";
        }
    }
    ?>
</body>
</html>