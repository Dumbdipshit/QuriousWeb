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
                    $_SESSION["loggedIn"] = "true";                    
                    $db->execute();


            $db = $conn->prepare("
                    SELECT * FROM Acount
                    WHERE username=:username;
                ");
                $db->bindParam(":username", $_POST['username']);
                
                $db->execute();
                $result = $db->fetchAll();

                    for($i  = 0; $i < count($result); $i++){
                    $username = $result[$i]['username'];
                    $id = $result[$i]['id'];
                }

                $_SESSION["user"] = $username;
                $_SESSION["id"] = $id;


                    header("Location: index.php");
        }catch (PDOEXCEPTION $e){
            $_SESSION["error"] = "DuplicateUsername";
            header("Location: create-acount.php");
        }
    }else{
        $_SESSION["error"] = "UnMatchingPassword";
        header("Location: create-acount.php");

    }
?>