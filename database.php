<?php

$server = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'database';

$con = mysqli_connect($server,$username,$password,$dbname);

if($con){
    echo "Connection Successful";
}
else{
    echo "No Connection";
}

mysqli_select_db($con, $dbname);

$user = $_POST['user'];
$password = $_POST['password'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];


$query = "insert into database (username, password, email, mobile) values('$user', '$password', '$email', '$mobile')" ;

mysqli_query($con, $query);

header('location:index.php');



?>