<!DOCTYPE HTML>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/changelog.css">
    <link href="https://fonts.googleapis.com/css?family=Fira+Mono&display=swap" rel="stylesheet">
    <title>Dashboard</title>
</head>
<body>
    <div class="navbar">
        <img src="images/BITRunnesLogo_Zondertekst.png" alt="BITRunners">
        <a href="dashboard.php">Home</a>
        <a href="#timer">Focus Timer</a>
        <a href="vakanties.php">Vakanties</a>
        <a href="planning.php">Planning</a>
        <a href="#overzicht">Absentie</a>
        <a class = "active" href="changelog.php">Changelog</a>

        <form action="handler.php" method="post">
            <button class="logout" type="submit" name="submit-logout">Log uit</button>
        </form>

    </div>
​
        <!-- header div voor de changelog in hoofdletters.-->
        <div id="header">
            <h1>Changelog</h1>
        </div>
​
<!-- content voor changelog. hier komen de datum en de changelog content in-->
        <div class="Changelog_content">
​
            <!-- in deze class komt de flexbox om de changelog_datum rechts te krijgen en content in het midden van de changelog_content div-->
            <div class="changelog_datum">
                <h1>6-12-2019</h1>
            </div>
            <div class="change_input">
                1
                <hr>
            </div>
​
            <div class="changelog_datum">
                <h1>6-12-2019</h1>
            </div>
            <div class="change_input">
                2
                <hr>
            </div>

            <div class="changelog_datum">
                <h1>6-12-2019</h1>
            </div>
            <div class="change_input">
                3
                <hr>
            </div>

    </div>
</body>
</html>
