<?php
    session_start();

    include ("connect.php");
    $db = $conn->prepare("
        SELECT * FROM Acount
        WHERE username=:username AND userPassword=:password;
    ");
    $db->bindParam(":username", $_POST['username']);
    $db->bindParam(":password", $_POST['password']);
    
    $db->execute();
    $result = $db->fetchAll();

        for($i  = 0; $i < count($result); $i++){
            $username = $result[$i]['username'];
            $password = $result[$i]['userPassword'];
            $id = $result[$i]['id'];
            $isAdmin = $result[$i]['isAdmin'];
        }

    if($username == $_POST['username'] &&  $password == $_POST['password']){
        $_SESSION["error"] = "none";
        $_SESSION["loggedIn"] = "true";
        $_SESSION["user"] = $username;
        $_SESSION["id"] = $id;

        if($isAdmin == 1){
            $_SESSION["isAdmin"] = "true";
        }else{
            $_SESSION["isAdmin"] = "false";
        }

        header("Location: index.php");
    }else{
        $_SESSION["error"] = "WrongPassword";
        header("Location: log-in.php");
    }
?>