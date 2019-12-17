<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <title>Dashboard</title>
</head>

<body>
    <?php if(isset($_COOKIE["User"])) { ?>
    <div class="navbar">
        <img class="navLogo" src="images/BITRunnesLogo_Zondertekst.png" alt="BITRunners">
        <a class="active" href="dashboard.php">Home</a>
        <a href="countdown.php">Focus Timer</a>
        <a href="vakanties.php">Vakanties</a>
        <a href="planningClean.php">Planning</a>
        <a href="#overzicht">Absentie</a>
        <a href="changelog.php">Changelog</a>
        <form action="handler.php" method="post">
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
                Iets
            </div>
            <div class="planningVandaag">
                <h4 class="planningVandaagFont">
                    Planning vandaag:
                </h4>
                Iets
            </div>
            <div class="presentie">
                <h3 class="presentieFont">
                    Presentie:
                </h3>
                Iets
            </div>
        </div>
    </div>
    <?php } else { ?>
        <div>
            <p>U heeft geen toegang tot deze pagina</p>
        </div>
    <?php } ?>
</body>

</html>