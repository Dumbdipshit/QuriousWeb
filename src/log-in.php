<?php
    session_start();   
    include ("connect.php");
    if($_SESSION["loggedIn"] == "true"){
        header("Location: profile.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
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
                You arent logged in yet no worries.
            </h1>
            <!-- This is the container of loggin in -->
            <form class="website-location-container light-gray-outline medium-width" action="process-log-in.php" method="post">
                <div class="website-create-content-form">
                    <p class="smaller-text warning-text">
                        <?php
                            if($_SESSION["error"] == "WrongPassword"){
                                echo "The username or password is incorrect";
                                $_SESSION["error"] = "none";
                            }
                        ?>
                    </p>

                    <label class="website-location-light-text smaller-text" for="username">Username:</label>
                    <input class="website-input-style smaller-text" type="text" autocomplete="off" name="username">

                    <label class="website-location-light-text smaller-text" for="password">Password:</label>
                    <input class="website-input-style smaller-text" type="text" autocomplete="off" name="password">
                    
                    <a class="smaller-text text-link" href="change-password.php">forgot password</a>
                    <a class="smaller-text text-link" href="create-acount.php">you dont have a acount?</a>
                    <div class="padding-bottom">
                        <input class="website-blue-button" type="submit" value="Log in"></input>
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