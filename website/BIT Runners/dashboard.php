<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="navbar">
        <img src="images/BITRunnesLogo_Zondertekst.png" alt="BITRunners">
        <a class="active" href="dashboard.php">Home</a>
        <a href="countdown.php">Focus Timer</a>
        <a href="vakanties.php">Vakanties</a>
        <a href="planning.php">Planning</a>
        <a href="#overzicht">Absentie</a>
        <a href="changelog.php">Changelog</a>

        <form action="handler.php" method="post">
            <button class="logout" type="submit" name="submit-logout">Log uit</button>
        </form>

    </div>

    <div class="fullpage">

        <div class="topinfo">
            <h1>
                Goedemorgen, <? echo $_COOKIE["naam"]; ?>!
            </h1>
            <h3>
                Je bent vandaag <? echo $_COOKIE["presentie"]; ?>!
            </h3>
        </div>

        <div class="content">
            <div class="planningGisteren">
                <h4 class="planningGisterenFont">
                    Planning gisteren:
                </h4><br>
                <div class="planningGisterenContent">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi architecto consequatur ea earum facilis, inventore placeat quas? Accusamus amet at blanditiis, corporis, explicabo facilis illum, minus natus possimus quisquam sapiente.</div>
            </div>
            <div class="planningVandaag">
                <h4 class="planningVandaagFont">
                    Planning vandaag:
                </h4><br>
                <div class="planningVandaagContent">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi architecto consequatur ea earum facilis, inventore placeat quas? Accusamus amet at blanditiis, corporis, explicabo facilis illum, minus natus possimus quisquam sapiente.</div>
            </div>
            <div class="presentie">
                <h4 class="presentieFont">
                    Presentie:
                </h4><br>
                <div class="presentieContent">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi architecto consequatur ea earum facilis, inventore placeat quas? Accusamus amet at blanditiis, corporis, explicabo facilis illum, minus natus possimus quisquam sapiente.</div>
            </div>
        </div>
    </div>

</body>
</html>


