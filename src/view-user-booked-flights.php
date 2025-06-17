<?php
    session_start();   
    include ("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View booked flights</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" type="image/x-icon" href="assets/images/magnify glass_darkBlue.png">
</head>
<body onload="LoadScript()">
    <?php
        $db = $conn->prepare("
        SELECT * FROM Acount
        WHERE bookedPlace <> 0;
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
                <h1 class="website-location-light-text align-self-center">Booked Flights:</h1>
                
                <?php
                    for($i  = 0; $i < count($result); $i++){
                        $flightId = $result[$i]['bookedPlace'];
                ?>
                    <div class="website-location-container light-gray-outline smaller-vertical-margin">
                        <div class="website-review-row-container smaller-gap">
                            <div class="website-profile-box">
                                <!-- This is the profile image the image can be changed -->
                                <img class="profile-image" src="assets/images/city.png" alt=":)">
                            </div>
                            <!-- The username can be changed -->
                            <h1 class="username-text">
                                <?php echo $result[$i]['username'];?>
                            </h1>
                        </div>
                        <div class="website-button-row-container padding-bottom">
                            <!-- The Location  can be changed -->
                            <p class="website-location-light-text">
                                Booked location id: <span><?php echo $flightId; ?></span>
                            </p>

                            <a class="view-button-location" href='location-page.php?id=<?php echo $flightId; ?>'>
                                <input class="website-blue-button" type="submit" value="View">
                            </a>
                        </div>

                    </div>
                <?php
                    }
                ?>

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