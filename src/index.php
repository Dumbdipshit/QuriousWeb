<?php
    session_start();
    include ("connect.php");
    echo $_SESSION["user"];
    echo $_SESSION["loggedIn"];
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
<body onload="test()">
    <header>
        <?php
            include ("header.php");
        ?>
    </header>

    <main>
        <!-- This is the flex column container for the all the items in the website -->
        <div class="website-main-column-container">

            <!-- This is the website eyecatcher container -->
            <a href="about-us.php">
                <div class="website-overflow-container">
                    <div class="website-image-container">
                        <img class="image " src="assets/images/city.png" alt="city">
                    </div>

                    <div class="website-header-eye-catcher-name-and-info">
                        <div class="website-header-text-content-container">
                            <h1 class="website-header-eye-catcher-text website-display-text">Discover with Qurious</h1>
                            <h1 class="website-header-text">
                                About us
                            </h1>
                        </div>
                        <div class="website-text-content-container">
                            <p class="website-normal-text website-display-text">Want to fullfil your curiosity? We are here, with Qurious you can find the nicest vaction location. To calm down or discover, were here for you!</p>
                        </div>
                    </div>
                </div>
            </a>


            <!-- This is the container of the travel options for the webiste -->
            <div class="website-items-wrap-container">

                <!-- This is the visuals for the content of the website -->
                 <div class="website-items-container">
                    <!-- This is the image for the locations and can be changed -->
                    <img class="items-image" src="assets/images/city.png" alt="city">
                    
                        <div class="website-name-and-info-column-container">
                            <div class="website-items-text-container">
                                <p class="website-items-travel-to-text">
                                    Travel to:
                                </p>

                                <!-- This is the location name and the "Location" name can be changed -->
                                <h1 class="website-items-name-text">
                                    New Eridu
                                </h1>
                                <p class="website-items-text">
                                    <!-- The County text can be changed -->
                                    A place in: <span class="website-items-country-text">America<span>
                                </p>
                            </div>
                            <div class="website-items-text-description-container">
                                    <!-- This is the discription of the location. It can be changed and wont be the same. -->
                                    <p class="website-items-description-text website-display-text">
                                        This is a fictional place from the game Zenless Zone Zero. I took the image because it looked nice and it has alot of pixels.
                                    </p>
                            </div>
                        </div>
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