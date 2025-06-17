<?php
    session_start();
    include ("connect.php");

    if($_POST['userPassword'] == $_POST['confirmPassword']){
        
        $db = $conn->prepare("
        SELECT * FROM Acount
        WHERE username=:username AND petName=:petName;
        ");
        $db->bindParam(":username", $_POST['username']);
        $db->bindParam(":petName", $_POST['petName']);
        $db->execute();
        $result = $db->fetchAll();

        for($i  = 0; $i < count($result); $i++){
            $username = $result[$i]['username'];
            $petName = $result[$i]['petName'];
            $id = $result[$i]['id'];
        }

        if($username == $_POST['username'] &&  $petName == $_POST['petName']){

            $sql = "UPDATE Acount
                set userPassword = :userPassword
                WHERE id = :id";

            $db = $conn->prepare($sql);
                $db->bindParam(":id", $id);
                $db->bindParam(":userPassword", $_POST['userPassword']);
                
            $db->execute();

            $_SESSION["error"] = "none";
            header("Location: log-in.php");
        }else{
            $_SESSION["error"] = "changePassError";
            header("Location: change-password.php");
    }


    }else{
        $_SESSION["error"] = "UnMatchingPassword";
        header("Location: change-password.php");
    }
?>