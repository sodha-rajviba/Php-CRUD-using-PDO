<?php

require "./connection.php";

$id=$_GET['id'];

$query="DELETE FROM `Student_details` where Id=(?);";
$params=[$id];
$statement = $connection->prepare($query);
$row = $statement->execute($params);

if($row>0)
    return header('Location:./index.php');
else
    echo "Error in delete."

?>