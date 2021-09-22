<?php 
session_start();
$server = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'carrental';

$con = mysqli_connect($server,$username,$password,$dbname);

if(isset($_POST["submit"]))
{
$rent=$_SESSION['total'];
$creditcard = $_POST['creditcard'];
$expiry = $_POST['expiry'];
$cvc=$_POST['cvc'];

$query="insert into payment(total,card,expiry,cvv) values ('$rent','$creditcard','$expiry','$cvc')";
mysqli_query($con,$query);

}

?>