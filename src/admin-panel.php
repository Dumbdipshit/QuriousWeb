<?php
    session_start();   
    include ("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
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
                Admin Panel
            </h1>
            
            <!-- This is the container for the admin panels -->
            <div class="website-items-wrap-container">

                <!-- This is the container for the panel to "EDIT" items -->
                <div class="panel-options light-gray-outline">
                    <!-- This is the container for the panel image -->
                    <div class="admin-panel-image-container">
                        <img class="admin-edit-item-gear-image gear-location-one" src="assets/images/admin blue_icon.png" alt="gears">
                        <img class="admin-edit-item-gear-image gear-location-two" src="assets/images/admin blue_icon.png" alt="gears">
                    </div>

                    <!-- This is the container for the panel name -->
                    <h1 class="admin-panel-name">
                        Edit items
                    </h1>
                </div>


                <!-- This is the container for the panel to "Create" items -->
                <div class="panel-options light-gray-outline">
                    <!-- This is the container for the panel image -->
                    <div class="admin-panel-image-container">
                        <img class="admin-create-items-hammer-image hammer-location" src="assets/images/hammer blue.png" alt="hammer">
                        <img class="admin-create-items-bricks-image bricks-location" src="assets/images/bricks blue.png" alt="bricks">
                    </div>

                    <!-- This is the container for the panel name -->
                    <h1 class="admin-panel-name">
                        Create items
                    </h1>
                </div>

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