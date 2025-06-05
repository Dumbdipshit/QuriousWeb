<?php
    session_start();   
    include ("connect.php");

    if($_SESSION["loggedIn"] == "false"){
        header("Location: log-in.php");
    }
    
?>
<?php
echo $_POST["id"];
?>
<br>
<?php
echo $_SESSION["user"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumbmit a review</title>
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
            <h1 class="website-location-light-text margin-top">Write a review</h1>
            <!-- This is the container of writing a review -->
            <form class="website-location-container light-gray-outline medium-width" action="process-written-review.php" method="post">
                <input class="hide-content" type="number" name="flightId" value="<?php echo $_POST["id"]; ?>">
                <input class="hide-content" type="text" name="username" value="<?php echo $_SESSION["user"]; ?>">

                <textarea class="review-text-box-area" placeholder="Write your review" type="text" autocomplete="off" name="review"></textarea>
                <div class="website-location-row-container padding-bottom">
                    <input class="website-blue-button" type="submit" value="confirm"></input>
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