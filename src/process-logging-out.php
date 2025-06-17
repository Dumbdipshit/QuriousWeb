<?php
    session_start();
    include ("connect.php");
    $_SESSION["user"] = "none";
    $_SESSION["id"] = "none";
    $_SESSION["loggedIn"] = "false";
    $_SESSION["isAdmin"] = "false";
    $_SESSION["flight"] = 0;

    header("Location: log-in.php");

    
?>