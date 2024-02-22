<?php
    session_start(); 
    $_SESSION = [];
    session_unset();
    session_destroy(); 
    
    setcookie('email', '', time() - 3600);
    setcookie('pass', '', time() - 3600);
    
    header("location:home.php"); 
?>