<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="css/main.css">
</head>
    <body>
        <div onclick="ActivateSideBar()" class="header-column-container">
            <div class="header-row-container">
                <div class="header-menu-logo-container">
                    <div class="header-menu-button">
                        <img class="header-menu-image" src="assets/images/more options.png" alt="options">
                    </div>

                    <img class="header-logo-image" src="assets/images/name white.png" alt="Qurious">
                </div>

                <form class="search-form-container" action="search-flight.php" method="post">
                    <input class="header-search" autocomplete="off" name="search" type="text">

                    <div class="sumbit-search-container">
                        <input class="sumbit-search-button" type="submit" value="">
                        <img class="website-search-image" src="assets/images/magnify glass_darkBlue.png" alt="search">
                    </div>
                </form>
            </div>
        </div>
        
        <div class="menu-side-bar-options hide-menu-side-bar">
            <a href="index.php" class="menu-side-bar-buttons">
                <img class="menu-button-image" src="assets/images/house.png" alt="home">
            </a>

            <a href="profile.php" class="menu-side-bar-buttons">
                <img class="menu-button-image" src="assets/images/acount.png" alt="profile">
            </a>

            <a href="booked-flight.php" class="menu-side-bar-buttons">
                <img class="menu-button-image" src="assets/images/location.png" alt="booked">
            </a>

            <a href="about-us.php" class="menu-side-bar-buttons">
                <img class="menu-button-image" src="assets/images/about us.png" alt="about us">
            </a>

            <a href="contact-page.php" class="menu-side-bar-buttons">
                <img class="menu-button-image" src="assets/images/contact_blue.png" alt="contact">
            </a>

            <?php
                if($_SESSION["isAdmin"] == "true"){
            ?>
                    <a href="admin-panel.php" class="menu-side-bar-buttons">
                        <img class="menu-button-image" src="assets/images/admin blue_icon.png" alt="admin">
                    </a>
            <?php
                }
            ?>
        </div>

        <div class="header-margin-bottom"></div>
    </body>
</html>