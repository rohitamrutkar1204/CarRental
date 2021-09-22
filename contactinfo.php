<?php

$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'carrental';

$con = mysqli_connect($server,$username,$password,$dbname);

if($con){
    echo "Connection Successful";
}
else{
    echo "No Connection";
}

mysqli_select_db($con, $dbname);

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];


$query = "insert into contact (user, email, mobile, comment) values('$user', '$email', '$mobile', '$comments')" ;

mysqli_query($con, $query);

header('location:index.php');



?>