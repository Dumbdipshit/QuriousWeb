<?php
    session_start();
    include ("connect.php");

    if($_SESSION["loggedIn"] == "false"){
        header("Location: log-in.php");
    }
    $sql = "UPDATE Flights
            set name = :flightName, country = :country, price= :price, description= :flightDescription
            WHERE id = :id";

            $db = $conn->prepare($sql);
                $db->bindParam(":id", $_POST['flightId']);
                $db->bindParam(":flightName", $_POST['flightName']);
                $db->bindParam(":country", $_POST['country']);
                $db->bindParam(":price", $_POST['flightPrice']);
                $db->bindParam(":flightDescription", $_POST['flightDescription']);
            $db->execute();
            header("Location: edit-items.php");
?>