<?php
session_start();
echo  $_SESSION['User'];
$server = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'carrental';

$con = mysqli_connect($server,$username,$password,$dbname);

if($con){
    echo "Connection Successful, Payment Gateway";
}
else{
    echo "No Connection";
}

mysqli_select_db($con, $dbname);
if(isset($_POST['checkout_submit']))
{
$name = $_POST['checkout_name'];
$email = $_POST['checkout_email'];
$address=$_POST['checkout_address'];
$mobile = $_POST['checkout_mobile'];
$submit=$_POST['checkout_submit'];
$rent=$_POST['rent'];



$startdate=$_POST['startdate'];
$d=strtotime($startdate);
// $y= date("d-m-Y ", $d);
$y= date("Y-m-d", $d);
$enddate=$_POST['enddate'];
$e=strtotime($enddate);
// $z= date("d-m-Y ", $e);
$z= date("Y-m-d ", $e);
//echo $y;

// $query =  SELECT EXTRACT(DAY FROM "2017-06-15")  ;
// mysqli_query($con, $query);

$datetime1 = date_create($y); 
$datetime2 = date_create($z); 
$interval = date_diff($datetime1, $datetime2); 
$x = $interval->format('%a'); 
$total=$x*$rent;
$_SESSION['total']=$total;

$query = "insert into orders (name,address, mobile,email,startdate,enddate,days,rent) values('$name','$address' ,'$mobile','$email','$y','$z','$x','$total')";
mysqli_query($con, $query);

// $query="insert into payment(total) values ('$rent')";
// mysqli_query($con, $query);

header('location:payment.php');

}

?>