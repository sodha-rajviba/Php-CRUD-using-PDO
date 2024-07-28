<?php

$id=$_GET['id'];

$connection=mysqli_connect('localhost','root','','Student');
$query="SELECT * FROM `Student_details` WHERE `Id`=$id";
$result=mysqli_query($connection,$query);

$user=mysqli_fetch_assoc($result);
print_r($user);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UpdatePage</title>
</head>
<body>
<form action="./update.php" method="post">
        <input type="hidden" name="id" value="<?= $user['Id'] ?>">
        <input type="text" name="name" value="<?= $user['Name'] ?>">
        <input type="text" name="address" value="<?= $user['Address'] ?>">
        <input type="text" name="gender" value="<?= $user['Gender']?>">
        <input type="email" name="email" value="<?= $user['Email']?>">
        <input type="text" name="mobileno" value="<?= $user['Mobileno'] ?>">
        <input type="submit" value="Submit">
    </form>
</body>
</html>