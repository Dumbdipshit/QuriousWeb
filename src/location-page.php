<?php
    session_start();   
    include ("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" type="image/x-icon" href="assets/images/magnify glass_darkBlue.png">
</head>
<body>
    <header>
        <?php
            include ("header.php");
        ?>
    </header>

    <main>
        <div class="website-main-column-container">
            
            <!-- This is where you display the location info -->
            <div class="website-location-container">
                <img class="location-image" src="assets/images/city.png" alt="city">

                <!-- This container contains the book now button and the location name -->
                <div class="website-location-row-container">
                    <!-- The location name can change -->
                    <h1 class="website-location-name">Country</h1>
                    <form>
                        <input class="hide-content" type="number" name="id" value="test">
                        <input class="website-book-now-button" type="submit" value="Book now">
                    </form>
                </div>
                <!-- This container contains the price to travel to that location -->
                <div class="website-location-row-container">
                    <!-- The price can change -->
                    <span class="website-location-light-text">100.00</span>
                </div>
                <!-- This container contains the description to that location -->
                <div class="website-location-row-container">
                    <!-- The description can chnage -->
                    <p class="website-location-light-text">
                        Test test daohdakbdha iuadhia iakk.w djl kdana kdawalwa dls c wbe local ldjjakfhak
                        daoan ha iuadhia iakk.w djl kdana kdawalwa dls c wbe local ldjjakfhak
                        Test test daohdakbdha iuadhia iakk.w djl kdana kdawalwa dls c wbe local ldjjakfhak
                        daoan ha iuadhia iakk.w djl kdana kdawalwa dls c wbe local ldjjakfhak
                    </p>
                </div>
                <!-- This contianer contains the review button -->
                <div class="website-location-row-container">
                    <form>
                        <input class="hide-content" type="number" name="id" value="test">
                        <div class="website-button">
                            <input class="website-form-button" type="submit" value="Write review">
                            <img class="website-button-icon" src="assets/images/write blue.png" alt="review icon">
                        </div>
                    </form>
                </div>
            </dvi>
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