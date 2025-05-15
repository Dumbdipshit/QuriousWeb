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
        <div class="website-main-column-container">
            <div class="website-overflow-container">
                <div class="website-image-container" >
                    <img class="image" src="assets/images/city.png" alt="city">
                    <h1 class="website-header-eye-catcher-text">Discover with Qurious</h1>
                </div>

                <div class="website-text-content-container">
                    <h1 class="website-header-text">
                        About us
                    </h1>

                    <p class="website-normal-text display-text">
                        Want to fullfil your curiosity? 
                        <br>
                        We are here,  with Qurious you can find the nicest vaction location.
                        <br> 
                        To calm down or discover, were here for you!
                    </p>
                </div>
            </div>
        </div>
    </main>
    
    <footer></footer>
    <script src="scripts/script.js"></script>
</body>
</html>