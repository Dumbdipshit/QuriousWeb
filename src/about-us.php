<?php
    include ("connect.php");
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about us</title>
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
            <div class="website-introduction-container">
                <img class="website-introduction-image" src="assets/images/cloudless sky.png" alt="sky">
                <p class="website-intoduction-text">Stay curious with</p>
                <img class="website-introduction-logo-container" src="assets/images/logo blue thick outline.png" alt="Qurious">
            </div>

                <div class="website-content-contianer">
                    <h1 class="website-header-text">
                        About us
                    </h1>
                    <p class="website-paragraph-text">
                        We are Qurious, the best company for you to discover new places. From A to Z we can bring you there, somewhere in Europe? No problem
                        somewhere in Asia? No problem, with our wide range of avaible places to go, you can always bet on us. So stay curious with Qurious                        
                    </p>
                </div>
                
                <div class="website-content-contianer">
                    <h1 class="website-header-text">
                        general terms and conditions
                    </h1>
                    <p class="website-paragraph-text">
                        -We are legally allowed to harvest your organs if you agree with our terms of service<br>
                        -We can cancel your flight anytime without given reason<br>
                        -You arent allowed to make bombs or bom threats to our flights<br>
                        -Being near the contact page for more than 7 seconds is considered accepting our terms of service<br>
                    </p>
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