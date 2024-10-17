<?php
//include, require, include_once, require_once
include "user.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
</head>
<body>
    <h1>Student Form</h1>
    <form action="" method="post">
        Username <input type="text" name="username" id=""> <br>
        Password <input type="password" name="password" id=""> <br>
        First name <input type="text" name="fname" id=""> <br>
        Last name <input type="text" name="lname" id=""><br>
        GPA <input type="number" name="gpa" id="" min="0" max="10"><br>
        <input type="submit" value="Send">
    </form>
    <?php
    if(isset($_POST['username'])):
        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $gpa = $_POST['gpa'];
        $user1 = new Student($username, $password, $firstName, $lastName,$gpa);
    ?>
    <table>
        <tr>
            <th>Fullname</th>
            <th>Username</th>
            <th>GPA</th>
            <th>Classify</th>
        </tr>
        <tr>
            <td><?php echo $user1->getFullname() ?></td>
            <td><?php echo $user1->getUsername() ?></td>
            <td><?php echo $user1->gpa ?></td>
            <td><?php echo $user1->classify() ?></td>
        </tr>
    </table>
    <?php endif ?>
</body>
</html>