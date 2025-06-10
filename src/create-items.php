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
        <!-- This is the flex column container for the all the items in the website -->
        <div class="website-main-column-container">

            <!-- This is the container of the travel options for the webiste -->
            <div class="website-items-wrap-container">
                
                

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