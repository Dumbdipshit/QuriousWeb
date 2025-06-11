<?php
    session_start();   
    include ("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight info</title>
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
            SELECT * FROM Flights WHERE id=' . $_GET["id"] . ' 
        ');

        $db->execute();

        $result = $db->fetchAll();

        $locationId = $result[0]["id"];
        $locationName = $result[0]["name"];
        $locationPrice = $result[0]["price"];
        $locationCountry = $result[0]["country"];
        $locationDescription = $result[0]['description'];



        $db = $conn->prepare('
            SELECT * FROM Acount WHERE id=' . $_SESSION["id"] . '
        ');

        $db->execute();

        $result = $db->fetchAll();

        $currentlyBookedId = $result[0]["bookedPlace"];

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
            <?php
                include ("connect.php");

                $db = $conn->prepare('
                    SELECT * FROM Reviews WHERE flightId=' . $_GET["id"] . ' 
                ');

                $db->execute();

                $reviewResult = $db->fetchAll();
            ?>




            <!-- This is where you display the title of the reviews -->
            <div class="website-location-row-container smaller-width">
                <h1 class="website-location-light-text">Reviews:</h1>
            </div>

            <?php
                    for($i  = 0; $i < count($reviewResult); $i++){
            ?>

                <!-- This is where the reviews are -->
                <div class="website-location-container light-gray-outline">
                    <div class="website-review-row-container">
                        <!-- This container is  for the profile pic of the person who wrote the review -->
                        <div class="website-profile-box">
                            <!-- This is the profile image the image cna be changed -->
                            <img class="profile-image" src="assets/images/city.png" alt=":)">
                        </div>
                        <!-- The username can be changed -->
                        <h1 class="username-text">
                            <?php echo $reviewResult[$i]['username'];?>
                        </h1>
                    </div>
                    <!-- This is the container of the review text -->
                    <div class="website-review-row-container">
                        <!-- The review text can be changed -->
                        <p class="website-location-light-text">
                            <?php echo $reviewResult[$i]['review'];?>
                        </p>
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