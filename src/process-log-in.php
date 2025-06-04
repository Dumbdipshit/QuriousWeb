<?php
    session_start();

    include ("connect.php");
    $db = $conn->prepare("
        SELECT * FROM Acount
        WHERE username=:username AND password=:userPassword;
    ");
    $db->bindParam(":username", $_POST['username']);
    $db->bindParam(":userPassword", $_POST['password']);
    
    $db->execute();
    $result = $db->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo $_POST['username'];
        echo $_POST['password'];
    ?>
</body>
</html>