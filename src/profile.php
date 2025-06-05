<?php
    session_start();   
    include ("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
            <!-- This is the container of creating a acount -->
            <form class="website-location-container light-gray-outline medium-width" action="process-logging-out.php" method="post">
                <div class="website-create-content-form">
                    <h1 class="website-location-light-text margin-top align-self-center">
                        You are currently logged in as:
                    </h1>

                    <!-- This is the container for the profile picture -->
                    <div class="website-profile-picture-container">
                        <!-- The profile image can be changed -->
                        <img class="website-profile-picture" src="assets/images/herobrine_trans_icon_better_pants.png" alt="profile pic">
                    </div>

                    <!-- This is the container for the username and the username can be changed -->
                    <h1 class="website-profile-username align-self-center">
                        <?php
                            echo $_SESSION["user"];
                        ?>
                    </h1>

                    <div class="padding-bottom align-self-center">
                        <input class="website-gray-button" type="submit" value="log out"></input>
                    </div>
                </div> 
            </form>
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