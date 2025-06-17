<?php
    session_start();

    include ("connect.php");
            
    $sql = "INSERT INTO Flights (name, country, price, description)
        VALUES (:flightName, :country, :flightPrice, :flightDescription)";
        $db = $conn->prepare($sql);
        $db->bindParam(":flightName", $_POST['flightName']);
        $db->bindParam(":country", $_POST['country']);
        $db->bindParam(":flightPrice", $_POST['flightPrice']);
        $db->bindParam(":flightDescription", $_POST['flightDescription']);

        $db->execute();
        header("Location: edit-items.php");
?>