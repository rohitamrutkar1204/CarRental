<?php 
    if(!isset($_SESSION['User']))
    {
      session_start();
    }
    if(isset($_GET['logout']))
    {
        session_destroy();
        header("location:index.php");
    }

?>