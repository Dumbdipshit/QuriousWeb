<?php
    session_start();
    include ("connect.php");
    $_SESSION["user"] = "none";
    $_SESSION["id"] = "none";
    $_SESSION["loggedIn"] = "false";
    $_SESSION["isAdmin"] = "false";

    header("Location: log-in.php");

    
?>