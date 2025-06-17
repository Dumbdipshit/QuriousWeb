<?php
    session_start();   
    include ("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change password</title>
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
                Forgot the password? No worries.
            </h1>
            <!-- This is the container of loggin in -->
            <form class="website-location-container light-gray-outline medium-width" action="process-password-change.php" method="post">
                <div class="website-create-content-form">
                    <p class="smaller-text warning-text">
                        <?php
                            if($_SESSION["error"] == "changePassError"){
                                echo "The username doesnt exist or Pet name is incorrect";
                                $_SESSION["error"] = "none";
                            }elseif($_SESSION["error"] == "UnMatchingPassword"){
                                echo "The confirmed password has to be the same as your new password";
                                $_SESSION["error"] = "none";
                            }
                        ?>
                    </p>

                    <label class="website-location-light-text smaller-text" for="username">Your Username:</label>
                    <input class="website-input-style smaller-text" type="text" autocomplete="off" name="username" required>

                    <label class="website-location-light-text smaller-text" for="password">Your pet name:</label>
                    <input class="website-input-style smaller-text" type="text" autocomplete="off" name="petName" required>

                    <label class="website-location-light-text smaller-text" for="password">Your new password:</label>
                    <input class="website-input-style smaller-text" type="text" autocomplete="off" name="userPassword" required>

                    <label class="website-location-light-text smaller-text" for="password">Confirm new password:</label>
                    <input class="website-input-style smaller-text" type="text" autocomplete="off" name="confirmPassword" required>
                    
                    <div class="padding-bottom">
                        <input class="website-blue-button" type="submit" value="Confirm"></input>
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