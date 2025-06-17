<?php
    include ("connect.php");

    $db = $conn->prepare("
        DELETE FROM Flights WHERE id=" . $_GET['id'] . ";
    ");
    $db->execute();

    $db = $conn->prepare("
        DELETE FROM Reviews WHERE flightId=" . $_GET['id'] . ";
    ");
    $db->execute();

    $cancelVar = 0;
    
    $sql = "UPDATE Acount
            set bookedPlace= $cancelVar
            WHERE bookedPlace = :flightId";

            $db = $conn->prepare($sql);
                $db->bindParam(":flightId", $_GET['id']);
            $db->execute();
    
    

    header("Location: edit-items.php");
?>