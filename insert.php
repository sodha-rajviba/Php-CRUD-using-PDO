<?php 

$name=$_POST['name'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$mobileno=$_POST['mobileno'];

require "./connection.php";

//$connection=mysqli_connect('localhost','root','','Person');
//$query="INSERT INTO `Person_details`(`Name`,`Address`,`Gender`,`Email`,`Mobileno`) VALUES ('$name','$address','$gender','$email','$mobileno');";
//$row=mysqli_query($connection,$query);

$query="INSERT INTO `Student_details`(`Name`,`Address`,`Gender`,`Email`,`Mobileno`) VALUES (?,?,?,?,?);";
$params = [$name, $address,$gender,$email,$mobileno];

$statement = $connection->prepare($query);
$row = $statement->execute($params);

if($row>0)
    return header('Location:./index.php');
else
    echo "Error in data insertion.";


?>