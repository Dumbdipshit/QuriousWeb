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
                <h1 class="website-location-light-text align-self-center">Booked Flights:</h1>
                
                <div class="website-location-container light-gray-outline">
                    <div class="website-review-row-container smaller-gap">
                        <div class="website-profile-box">
                            <!-- This is the profile image the image can be changed -->
                            <img class="profile-image" src="assets/images/city.png" alt=":)">
                        </div>
                        <!-- The username can be changed -->
                        <h1 class="username-text">
                            Username
                        </h1>
                    </div>

                    <div class="website-row-container padding-bottom">
                        <!-- The Location  can be changed -->
                        <p class="website-location-light-text">
                            Booked: <span>Location</span>
                        </p>

                        <form class="view-button-location" action="" method="post">
                            <input class="hide-content" type="number" name="flightId" value="0">
                            <input class="website-blue-button" type="submit" value="View">
                        </form>
                    </div>

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