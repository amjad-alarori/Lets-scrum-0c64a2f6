<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/clock.css">
    <title>Document</title>
</head>

<body>
    <div class="navbar">
        <img class="navLogo" src="images/BITRunnesLogo_Zondertekst.png" alt="BITRunners">
        <a href="dashboard.php">Home</a>
        <a class="active" href="countdown.php">Focus Timer</a>
        <a href="vakanties.php">Vakanties</a>
        <a href="planningClean.php">Planning</a>
        <a href="#overzicht">Absentie</a>
        <a href="changelog.php">Changelog</a>
        <form action="handler.php" method="post">
            <button class="logout" type="submit" name="submit-logout">Log uit</button>
        </form>
    </div>


    <div class="content">
        <div class="input">
            Hoe lang duurt het focus moment?<br>
            <input id="time" type="time" value="00:00">
            <button class="button" onclick="run()">GO!</button>
        </div>

        <div class="timer" id="target"></div>
    </div>


    <script src="scripts/clock.js"></script>

</body>

</html>