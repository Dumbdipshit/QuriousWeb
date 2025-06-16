<?php
    session_start();
    include ("connect.php");

    if($_SESSION["loggedIn"] == "false"){
        header("Location: log-in.php");
    }
    echo "wow";
?>
<br>
<?php
    echo var_dump($_POST);
?>