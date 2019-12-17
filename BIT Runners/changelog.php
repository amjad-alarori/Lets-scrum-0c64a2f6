<!DOCTYPE HTML>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="css/changelog.css">
    <link href="https://fonts.googleapis.com/css?family=Fira+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/no-access.css">
    <title>Changelog</title>
</head>

<body>
    <?php if (isset($_COOKIE["user"]) && $_COOKIE["user"] === "Leerling") { ?>
        <div class="navbar">
            <img class="navLogo" src="images/BITRunnesLogo_Zondertekst.png" alt="BITRunners">
            <a href="dashboard.php">Home</a>
            <a href="countdown.php">Focus Timer</a>
            <a href="vakanties.php">Vakanties</a>
            <a href="planning.php">Planning</a>
            <a href="#overzicht">Absentie</a>
            <a class="active" href="changelog.php">Changelog</a>
            <form action="logoutHandler.php" method="post">
                <button class="logout" type="submit" name="submit-logout">Log uit</button>
            </form>
        </div>
        
        <!-- header div voor de changelog in hoofdletters.-->
        <div id="header">
            <h1>Changelog</h1>
        </div>
        
        <!-- content voor changelog. hier komen de datum en de changelog content in-->
        <div class="Changelog_content">
        
        <!-- in deze class komt de flexbox om de changelog_datum rechts te krijgen en content in het midden van de changelog_content div-->
        <div class="changelog_datum">
                <h1>10-12-2019</h1>
            </div>
            <div class="change_input">
                Admin page toegevoegd! Nog geen volle functionaliteit.
                <hr>
            </div>

            <div class="changelog_datum">
                <h1>9-12-2019</h1>
            </div>
            <div class="change_input">
                Changelog toegevoegd!
                <hr>
            </div>
            <div class="changelog_datum">
                <h1>6-12-2019</h1>
            </div>
            <div class="change_input">
                Timer toegevoegd. Volle functionaliteit.
                <hr>
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
                        <form action="backToLoginHandler.php" method="post">
                            <button class="submit-terug" type="submit" name="submit-terug">Terug naar Log-In</button>
                        </form>
                    </form>
                </div>
            </div>
        </div>
    <?php } ?>
</body>

</html>