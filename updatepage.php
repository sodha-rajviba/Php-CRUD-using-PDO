<?php

$id=$_GET['id'];

require './connection.php';
$query = "SELECT * FROM Student_details WHERE Id=(?)";
$params=[$id];
$statement = $connection->prepare($query);
$statement->execute($params);
$user = $statement->fetch(PDO::FETCH_ASSOC);

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