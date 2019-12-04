<?php
require_once "handler.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Planning</title>
    <link rel="stylesheet" href="">
</head>

<body>
    <?php if($absentPresent === "absent") { ?>
        <p>waarom ben je absent?</p>
        <form action="handler.php" method="POST">
            <textarea name="userInput" id="userInput" cols="30" rows="10"></textarea>
            <input type="submit" name="submit-reden">
        </form>
    <?php } if($absentPresent === "present") { ?>
        <p>Wat is je planning voor vandaag?</p>
        <form action="handler.php" method="POST">
            <textarea name="userInput" id="userInput" cols="30" rows="10"></textarea>
            <input type="submit" name="submit-planning">
        </form>
    <?php } ?>

</body>

</html>