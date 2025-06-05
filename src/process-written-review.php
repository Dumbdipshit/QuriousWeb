<?php
        include ("connect.php");


        $sql = "INSERT INTO Reviews (flightId, username, review)
            VALUES (:flightId, :username, :review)";
                $db = $conn->prepare($sql);
                $db->bindParam(":flightId", $_POST['flightId']);
                $db->bindParam(":username", $_POST['username']);
                $db->bindParam(":review", $_POST['review']);

                $db->execute();
                header("Location: location-page.php?id=".$_POST['flightId']);
?>