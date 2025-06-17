<?php
    session_start();

    include ("connect.php");

    if($_SESSION["loggedIn"] == "false"){
        header("Location: log-in.php");
    }else{

    $sql = "UPDATE Acount
            set id = :id, bookedPlace= :flightId
            WHERE id = :id";

            $db = $conn->prepare($sql);
                $db->bindParam(":id", $_SESSION['id']);
                $db->bindParam(":flightId", $_POST['flightId']);
            $db->execute();

            $_SESSION["flight"] = $_POST['flightId'];

    header("Location: location-page.php?id=".$_POST['flightId']);
    }
?>