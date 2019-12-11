<!doctype html>

<head>
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <link rel="stylesheet" type="text/css" href="css/vakanties.css">
    <title>vakanties</title>
</head>

<body>
    <div class="navbar">
        <img class="navLogo" src="images/BITRunnesLogo_Zondertekst.png" alt="BITRunners">
        <a href="dashboard.php">Home</a>
        <a href="countdown.php">Focus Timer</a>
        <a class="active" href="vakanties.php">Vakanties</a>
        <a href="planningClean.php">Planning</a>
        <a href="#overzicht">Absentie</a>
        <a href="changelog.php">Changelog</a>
        <form action="handler.php" method="post">
            <button class="logout" type="submit" name="submit-logout">Log uit</button>
        </form>
    </div>

    <div class="content">
        <div class="vacay-container" id="kerstvakantie">
            <h1>Kerstvakantie</h1>
            <div class="timer">
                <div class="countd">
                    <span id="days">00</span>
                    Dagen
                </div>
                <div class="countd">
                    <span id="hours">00</span>
                    Uren
                </div>
                <div class="countd">
                    <span id="minutes">00</span>
                    Minuten
                </div>
                <div class="countd">
                    <span id="seconds">00</span>
                    Seconden
                </div>
            </div>
        </div>
        <div class="vacay-container" id="voorjaarsvakantie">
            <h1>Voorjaarsvakantie</h1>
            <div class="timer">
                <div class="countd">
                    <span id="daysv">00</span>
                    Dagen
                </div>
                <div class="countd">
                    <span id="hoursv">00</span>
                    Uren
                </div>
                <div class="countd">
                    <span id="minutesv">00</span>
                    Minuten
                </div>
                <div class="countd">
                    <span id="secondsv">00</span>
                    Seconden
                </div>
            </div>
        </div>
        <div class="vacay-container" id="meivakantie">
            <h1>Meivakantie</h1>
            <div class="timer">
                <div class="countd">
                    <span id="daysm">00</span>
                    Dagen
                </div>
                <div class="countd">
                    <span id="hoursm">00</span>
                    Uren
                </div>
                <div class="countd">
                    <span id="minutesm">00</span>
                    Minuten
                </div>
                <div class="countd">
                    <span id="secondsm">00</span>
                    Seconden
                </div>
            </div>
        </div>
        <div class="vacay-container" id="zomervakantie">
            <h1>Zomervakantie</h1>
            <div class="timer">
                <div class="countd">
                    <span id="daysz">00</span>
                    Dagen
                </div>
                <div class="countd">
                    <span id="hoursz">00</span>
                    Uren
                </div>
                <div class="countd">
                    <span id="minutesz">00</span>
                    Minuten
                </div>
                <div class="countd">
                    <span id="secondsz">00</span>
                    Seconden
                </div>
            </div>
        </div>

        <script src="scripts/vakanties.js"></script>
</body>

</html>