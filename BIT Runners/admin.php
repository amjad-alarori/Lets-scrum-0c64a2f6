<!doctype html>
<html lang="en">

<head>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <link rel="stylesheet" type="text/css" href="css/no-access.css">
    <title>Admin Page</title>
</head>

<body onload="typeWriter();">
    <?php if (isset($_COOKIE["user"]) && $_COOKIE["user"] === "Admin") { ?>
        <div class="navbar">
            <img src="images/BITRunnesLogo_Zondertekst.png" alt="BITRunners">
            <a href="dashboard.php">Dashboard</a>
            <a class="active" href="admin.php">Admin page</a>
            <form action="logoutHandler.php" method="post">
                <button class="logout" type="submit" name="submit-logout">Log uit</button>
            </form>

        </div>
        <script src="scripts/typewriter.js"></script>
        <div class="topinfo">
            <h1>
                Goedemorgen, <? echo $_COOKIE["naam"]; ?>!
            </h1>
            <h3 id="typewriter">

            </h3>
        </div>
        <div class="fullpage">
            Iets
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