<?php
    session_start();   
    include ("connect.php");
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
<body>
    <header>
        <?php
            include ("header.php");
        ?>
    </header>

    <main>
        <div class="index-main-column-container">

            <div class="image-and-content-container">

                <div class="image-container">
                    <img class="image" src="assets/images/placeholder image.png">
                </div>

                <div class="website-content-container">
                    <h1 class="title-text-container">
                        Cool title
                    </h1>
                    <p class="normal-text-container">
                        Random text test test wowow owowow
                    </p>
                </div>
            </div>
        </div>
    </main>
    
    <footer></footer>
    <script src="scripts/script.js"></script>
</body>
</html>