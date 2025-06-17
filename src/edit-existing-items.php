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
    <?php
        $db = $conn->prepare('
            SELECT * FROM Flights WHERE id=' . $_GET["id"] . ' 
        ');

        $db->execute();

        $result = $db->fetchAll();

        $locationId = $result[0]["id"];
        $locationName = $result[0]["name"];
        $locationPrice = $result[0]["price"];
        $locationCountry = $result[0]["country"];
        $locationDescription = $result[0]['description'];
    ?>  

    <header>
        <?php
            include ("header.php");
        ?>
    </header>

    <main>
        <!-- This is the flex column container for the all the items in the website -->
        <div class="website-main-column-container">
            <h1 class="website-location-light-text margin-top">
                Edit already existing flight:
            </h1>

            <!-- This is the container of creating a new flight -->
            <form class="website-location-container light-gray-outline medium-width" action="process-edited-item.php" method="post">
                <div class="website-create-content-form">
                    <input class="hide-content" type="number" name="flightId" value="<?php echo $locationId; ?>" required>

                    <label class="website-location-light-text smaller-text" for="username">Name:</label>
                    <input class="website-input-style smaller-text" type="text" autocomplete="off" name="flightName" value='<?php echo $locationName; ?>' required>

                    <label class="website-location-light-text smaller-text" for="password">Country:</label>
                    <input class="website-input-style smaller-text" type="text" autocomplete="off" name="country" value='<?php echo $locationCountry; ?>' required>

                    <label class="website-location-light-text smaller-text" for="password">Price:</label>
                    <input class="website-input-style smaller-text" type="number" autocomplete="off" name="flightPrice" value='<?php echo $locationPrice; ?>'   min="0.00" max="10000.00" step="0.01">

                    <label class="website-location-light-text smaller-text" for="password">Description:</label>
                    <textarea  class="website-input-style smaller-text website-textarea" autocomplete="off" name="flightDescription"><?php echo $locationDescription; ?></textarea>

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