<?php
    session_start();   
    include ("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact page</title>
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
            <h1 class="website-location-light-text margin-top">
                Problem? Contact us!

            </h1>
            <!-- This is the container of loggin in -->
            <div class="contact-location-container light-gray-outline medium-width">
                <div class="contact-column-container">
                    <a href=""  class="contact-button">
                        E-Mail
                    </a>

                    <a href=""  class="contact-button twitter-button-decoration">
                        X "Twitter"
                    </a>

                    <a href=""  class="instagram-button">
                        <div class="instagram-button-decoration">
                            instagram
                        </div>
                    </a>
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