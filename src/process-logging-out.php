<?php
    session_start();

    include ("connect.php");
    $_SESSION["user"] = "none";
    $_SESSION["loggedIn"] = "false";
    header("Location: log-in.php");
?>