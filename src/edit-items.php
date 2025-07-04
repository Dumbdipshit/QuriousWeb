<?php
    session_start();   
    include ("connect.php");
    if($_SESSION["isAdmin"] == "false"){
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" type="image/x-icon" href="assets/images/magnify glass_darkBlue.png">
</head>
<body onload="LoadScript()">
    <?php
        $db = $conn->prepare("
            SELECT * FROM Flights
        ");

        $db->execute();
        $result = $db->fetchAll();
    ?>

    <header>
        <?php
            include ("header.php");
        ?>
    </header>

    <main>
        <!-- This is the flex column container for the all the items in the website -->
        <div class="website-main-column-container">

            <!-- This is the container of the travel options for the webiste -->
            <div class="website-items-wrap-container">
                <?php
                    for($i  = 0; $i < count($result); $i++){
                ?>
                    <div class="website-items-container cursor-default">
                        <img class="items-image" src="assets/images/city.png" alt="city">
                        <div class="website-name-and-info-column-container">
                            <div class="website-items-text-container">
                                <p class="website-items-travel-to-text">
                                    Travel to:
                                </p>

                                <!-- This is the location name and the "Location" name can be changed -->
                                <h1 class="website-items-name-text">
                                    <?php echo $result[$i]['name'];?>
                                </h1>
                                <p class="website-items-text">
                                    <!-- The County text can be changed -->
                                    A place in: <span class="website-items-country-text"><?php echo $result[$i]['country'];?><span>
                                </p>

                                <div class="website-edit-item-button-column-container">
                                    <a  href="edit-existing-items.php?id=<?php echo $result[$i]['id']; ?>" class="edit-items-buttons">
                                        <img class="website-button-icon edit-items-button-location" src="assets/images/admin blue_icon.png" alt="edit item button">
                                    </a>

                                    <a  href=" process-delete-item.php?id=<?php echo $result[$i]['id']; ?>" class="edit-items-buttons">
                                        <img class="website-button-icon edit-items-button-location" src="assets/images/trashcan gray.png" alt="edit item button">
                                    </a>
                                </div>
                            </div>

                            <div class="website-items-text-description-container">
                                <!-- This is the discription of the location. It can be changed and wont be the same. -->
                                <p class="website-items-description-text website-display-text">

                                </p>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </main>
    
    <footer>
        <?php
            include ("footer.php");
        ?>
    </footer>
    <script src="scripts/script.js"></script>
</body>
</html>