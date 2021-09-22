<?php

$server = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'carrental';

$con = mysqli_connect($server,$username,$password,$dbname);

if($con){
    echo "Connection Successful";
}
else{
    echo "No Connection";
}

mysqli_select_db($con, $dbname);

$user = $_POST['UName'];
$pass = $_POST['Password'];
$mobile = $_POST['Mobile'];
$email = $_POST['Email'];


$query = "insert into registeredusers (UName, Pass, mobile, email) values('$user', '$pass', '$mobile', '$email')" ;

mysqli_query($con, $query);
// to print the query use echo and comment the header

header('location:index.php');



?>