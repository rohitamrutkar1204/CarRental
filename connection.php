<?php

    $con=mysqli_connect('localhost','root','root','carrental');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>