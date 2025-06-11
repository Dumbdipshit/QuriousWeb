<?php
    session_start();   
    include ("connect.php");
    if($_SESSION["loggedIn"] == "false"){
        header("Location: log-in.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booked info</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" type="image/x-icon" href="assets/images/magnify glass_darkBlue.png">
</head>
<body>
    <header>
        <?php
            include ("header.php");
        ?>
    </header>
    <?php
        include ("connect.php");


        $db = $conn->prepare('
            SELECT * FROM Acount WHERE id=' . $_SESSION["id"] . '
        ');

        $db->execute();

        $result = $db->fetchAll();

        $currentlyBookedId = $result[0]["bookedPlace"];

        $db = $conn->prepare('
            SELECT * FROM Flights WHERE id=' . $currentlyBookedId . ' 
        ');

        $db->execute();

        $result = $db->fetchAll();

        $locationId = $result[0]["id"];
        $locationName = $result[0]["name"];
        $locationPrice = $result[0]["price"];
        $locationCountry = $result[0]["country"];
        $locationDescription = $result[0]['description'];

        if($currentlyBookedId == $locationId){
            $bookingDisplay = "Cancel Flight";
            $bookingPost = "process-cancel-booking-flight.php";
            $bookingClass = "gray";
        }elseif($currentlyBookedId != 0){
            $bookingDisplay = "Change Flight";
            $bookingPost = "process-booking-flight.php";
            $bookingClass = "blue";
        }else{
            $bookingDisplay = "Book Now";
            $bookingPost = "process-booking-flight.php";
            $bookingClass = "blue";
        }
    ?>
    <main>
        <div class="website-main-column-container">
            
            <h1 class="website-location-light-text margin-top">
                Youve booked:
            </h1>

            <!-- This is where you display the location info -->
            <div class="website-location-container">
                <img class="location-image" src="assets/images/city.png" alt="city">

                <!-- This container contains the book now button and the location name -->
                <div class="website-location-row-container">
                    <!-- The location name can change -->
                    <h1 class="website-location-name">
                        <?php echo $locationName; ?>
                    </h1>

                    <form action="<?php echo $bookingPost; ?>" method="post">
                        <input class="hide-content" type="number" name="flightId" value="<?php echo $locationId; ?>">
                        <input class="website-<?php echo $bookingClass; ?>-button" type="submit" value="<?php echo $bookingDisplay; ?>">
                    </form>

                </div>
                <!-- This container contains the price to travel to that location -->
                <div class="website-location-row-container">
                    <!-- The price can change -->
                    <span class="website-location-light-text">
                        <?php echo $locationPrice; ?>
                    </span>
                </div>
                <!-- This container contains the price to travel to that location -->
                <div class="website-location-row-container">
                    <!-- The price can change -->
                    <p class="website-location-light-text">A place in: 
                        <span>
                            <?php echo $locationCountry; ?>
                        </span>
                    </p>
                </div>
                <!-- This container contains the description to that location -->
                <div class="website-location-row-container">
                    <!-- The description can chnage -->
                    <p class="website-location-light-text">
                        <?php echo $locationDescription; ?>
                    </p>
                </div>
                <!-- This contianer contains the review button -->
                <div class="website-location-row-container">
                    <form action="write-a-review.php" method="post">
                        <input class="hide-content" type="number" name="id" value="<?php echo $locationId; ?>">
                        <div class="website-button">
                            <input class="website-form-button" type="submit" value="Write review">
                            <img class="website-button-icon" src="assets/images/write blue.png" alt="review icon">
                        </div>
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