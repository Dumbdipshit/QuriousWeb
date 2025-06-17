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
    <title>Create acount</title>
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
                Nice to meet you. Lets make a acount to know you better.
            </h1>
            <!-- This is the container of creating a acount -->
            <form class="website-location-container light-gray-outline medium-width" action="process-created-acount.php" method="post">
                <div class="website-create-content-form">
                    <p class="smaller-text warning-text">
                        <?php
                            if($_SESSION["error"] == "DuplicateUsername"){
                                echo "The username is already taken";
                                $_SESSION["error"] = "none";
                            }elseif($_SESSION["error"] == "UnMatchingPassword"){
                                echo "The confirmed password has to be the same as your password";
                                $_SESSION["error"] = "none";
                            }elseif($_SESSION["error"] == "EmptyInfo"){
                                echo "You havent filled everything in";
                                $_SESSION["error"] = "none";
                            }
                        ?>
                    </p>

                    <label class="website-location-light-text smaller-text" for="username">Username:</label>
                    <input class="website-input-style smaller-text" type="text" autocomplete="off" name="username" required>

                    <label class="website-location-light-text smaller-text" for="password">Password:</label>
                    <input class="website-input-style smaller-text" type="text" autocomplete="off" name="password" required>

                    <label class="website-location-light-text smaller-text" for="password">Confirm Password:</label>
                    <input class="website-input-style smaller-text" type="text" autocomplete="off" name="confirmPassword" required>

                    <label class="website-location-light-text smaller-text" for="password">Your pet name:</label>
                    <input class="website-input-style smaller-text" type="text" autocomplete="off" name="petName" required>

                    <a class="smaller-text text-link" href="log-in.php">do you already have a acount?</a>

                    <div class="padding-bottom">
                        <input class="website-blue-button" type="submit" value="create"></input>
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