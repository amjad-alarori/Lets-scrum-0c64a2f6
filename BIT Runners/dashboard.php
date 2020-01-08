<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <link rel="stylesheet" type="text/css" href="css/no-access.css">
    <link rel="stylesheet" type="text/css" href="css/progress.php">
    <link rel="icon" type="image/png" href="images/home.png"/>
    <title>Dashboard</title>
</head>

<body>
    <?php if (isset($_COOKIE["user"]) && $_COOKIE["user"] === "Leerling") { ?>
        <div class="navbar">
            <img class="navLogo" src="images/BITRunnesLogo_Zondertekst.png" alt="BITRunners">
            <a class="active" href="dashboard.php">Home</a>
            <a href="countdown.php">Focus Timer</a>
            <a href="vakanties.php">Vakanties</a>
            <a href="planning.php">Planning</a>
            <a href="#overzicht">Absentie</a>
            <a href="changelog.php">Changelog</a>
            <form action="logoutHandler.php" method="post">
                <button class="logout" type="submit" name="submit-logout">Log uit</button>
            </form>
        </div>
        <div class="topinfo">
            <h1>
                Goedemorgen, <? echo $_COOKIE["naam"]; ?>!
            </h1>
            <h3>
                Je bent vandaag <? echo $_COOKIE["presentie"]; ?>!
            </h3>
        </div>
        <div class="fullpage">
            <div class="content">
                <div class="planningGisteren">
                    <h4 class="planningGisterenFont">
                        Planning gisteren:
                    </h4>
                    <?php echo $_COOKIE["planGisteren"]; ?>
                </div>
                <div class="planningVandaag">
                    <h4 class="planningVandaagFont">
                        Planning vandaag:
                    </h4>
                    <?php echo $_COOKIE["planVandaag"]; ?>
                </div>
                <div class="presentie">
                    <h3 class="presentieFont">
                        Presentie:
                    </h3>
                    <div class="container">
                        <div class="presentiebar"><? echo $_COOKIE["presentiepercentage"] . "%"; ?></div>
                    </div>
                </div>
            </div>
        </div>
    <?php }
                            if (!isset($_COOKIE["user"])) { ?>
        <div class="no-access-div">
            <div class="no-access">
                <div class="no-access-content">
                    <p>U dient in te loggen om toegang tot deze pagina te verkrijgen</p>
                </div>
                <div class="no-access-content">
                    <form action="backToLoginHandler.php" method="post">
                        <button class="submit-terug" type="submit" name="submit-terug">Terug naar Log-In</button>
                    </form>
                </div>
            </div>
        </div>
    <?php } ?>
</body>

</html>