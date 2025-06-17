<?php
    include ("connect.php");

    $db = $conn->prepare("
        DELETE FROM Flights WHERE id=" . $_GET['id'] . ";
    ");
    header("Location: edit-items.php");

    $db->execute();
?>