<?php

include "./connection.php";

$id = $_POST['id'];
$name = $_POST['name'];
$mobileno = $_POST['mobileno'];
$email = $_POST['email'];
$address = $_POST['address'];
$gender=$_POST['gender'];

$query = "UPDATE `Student_Details` SET Name = (?),  Address = (?), Gender=(?) ,Email = (?),Mobileno = (?) WHERE Id = (?) ";
$params = [$name,$address,$gender,$email,$mobileno,$id];

$statement = $connection->prepare($query);
$row = $statement->execute($params);

if ($row > 0)
    return header('Location: ./index.php');
else
    echo "Failed to update data";

?>