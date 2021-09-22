<?php 
require_once('connection.php');
session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['UName']) || empty($_POST['Password']))
       {
            header("location:login_page.php?Empty= Please Enter the Details");
       }
       else
       {
            $query="select * from registeredusers where UName='".$_POST['UName']."' and Pass='".$_POST['Password']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['UName'];
                header("location:index.php?Client = Welcome.'UName'");
            }
            else
            {
                header("location:login_page.php?Invalid= Please Enter Correct UserName and Password ");
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }

?>