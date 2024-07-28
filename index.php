<?php

$connection=mysqli_connect('localhost','root','','Student');
$query="SELECT * FROM `Student_details`;";
$row=mysqli_query($connection,$query);
$result=mysqli_fetch_all($row,MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body bgcolor="grey" align="center">
    <h1><u>User Details Form</u></h1>
    <form action="./insert.php" method="post">
       <label for="">NAME: <input type="text" name="name" placeholder="Enter Name"></label><br><br>
        <label for="">ADDRESS:<input type="text" name="address" placeholder="Enter Address"></label><br><br>
        <label for="">GENDER:<select name="gender" >
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select></label><br><br>
        <label for="">EMAIL: <input type="email" name="email" placeholder="Enter Email"></label><br><br>
        <label for="">MOBILE NUMBER:<input type="text" name="mobileno" placeholder="Enter MobileNumber"></label><br><br>
        <input type="submit" value="Submit">
    </form><br><br><br>
    <hr><hr>
    <br>
    <table border="1" align="center" bgcolor="white">
        <h1><u>DATA TABLE</u></h1>
        <thead>
            <th>NAME</th>
            <th>ADDRESS</th>
            <th>GENDER</th>
            <th>EMAIL</th>
            <th>MOBILE NUMBER</th>
            <th>DELETE</th>
            <th>UPDATE</th>
        </thead>
        <tbody>
            <?php foreach($result as $data){?>
                <tr>
                    <td><?= $data['Name']?></td>
                    <td><?= $data['Address']?></td>
                    <td><?= $data['Gender']?></td>
                    <td><?= $data['Email']?></td>
                    <td><?= $data['Mobileno']?></td>
                    <td><a href="./delete.php?id=<?= $data['Id']?>">Delete</td>
                    <td><a href="./updatepage.php?id=<?= $data['Id']?>">Update</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>