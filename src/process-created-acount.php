<?php
    session_start();

    include ("connect.php");

    if($_POST['password'] == $_POST['confirmPassword']){
            
        try{
            $sql = "INSERT INTO Acount (username, userPassword, petName)
                VALUES (:username, :userPassword, :petName)";
                    $db = $conn->prepare($sql);
                    $db->bindParam(":username", $_POST['username']);
                    $db->bindParam(":userPassword", $_POST['password']);
                    $db->bindParam(":petName", $_POST['petName']);
                    $_SESSION["error"] = "none";
                    header("Location: index.php");
                    $db->execute();
        }catch (PDOEXCEPTION $e){
            $_SESSION["error"] = "DuplicateUsername";
            header("Location: create-acount.php");
        }
    }else{
        $_SESSION["error"] = "UnMatchingPassword";
        header("Location: create-acount.php");

    }
?>