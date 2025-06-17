<?php
    session_start();   
    include ("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Flight</title>
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
        <!-- This is the flex column container for the all the items in the website -->
        <div class="website-main-column-container">
            <h1 class="website-location-light-text margin-top">
                Create a new flight:
            </h1>

            <!-- This is the container of creating a new flight -->
            <form class="website-location-container light-gray-outline medium-width" action="process-created-item.php" method="post">
                <div class="website-create-content-form">

                    <label class="website-location-light-text smaller-text" for="username">Name:</label>
                    <input class="website-input-style smaller-text" type="text" autocomplete="off" name="flightName">

                    <label class="website-location-light-text smaller-text" for="password">Country:</label>
                    <input class="website-input-style smaller-text" type="text" autocomplete="off" name="country">

                    <label class="website-location-light-text smaller-text" for="password">Price:</label>
                    <input class="website-input-style smaller-text" type="text" autocomplete="off" name="flightPrice">

                    <label class="website-location-light-text smaller-text" for="password">Description:</label>
                    <textarea  class="website-input-style smaller-text website-textarea" autocomplete="off" name="flightDescription"></textarea>

                    <div class="padding-bottom">
                        <input class="website-blue-button" type="submit" value="Create"></input>
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