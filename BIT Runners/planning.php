<?php
require_once "planningHandler.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Planning</title>
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <link rel="stylesheet" type="text/css" href="css/planning.css">
    <link rel="stylesheet" type="text/css" href="css/no-access.css">
    <link rel="icon" type="image/png" href="images/target.png" />
</head>

<body>
    <?php if (isset($_COOKIE["user"]) && $_COOKIE["user"] === "Leerling") { ?>
        <?php if (isset($_COOKIE["setplanning"]) && $_COOKIE["setplanning"] === "YES") { ?>
            <div class="navbar">
                <img class="navLogo" src="images/BITRunnesLogo_Zondertekst.png" alt="BITRunners">
                <a href="dashboard.php">Home</a>
                <a href="countdown.php">Focus Timer</a>
                <a href="vakanties.php">Vakanties</a>
                <a class="active" href="planning.php">Planning</a>
                <a href="#overzicht">Absentie</a>
                <a href="changelog.php">Changelog</a>
                <form action="logoutHandler.php" method="post">
                    <button class="logout" type="submit" name="submit-logout">Log uit</button>
                </form>
            </div>
        <?php } ?>
        <div class="all-content">
            <?php if (isset($_COOKIE["presentie"]) && $_COOKIE["presentie"] === "absent") { ?>
                <div class="message-container">
                    <div class="message-box">
                        <form action="planningHandler.php" method="post" class="message-form">
                            <div class="logo">
                                <img alt="BIT Runners" src="images/BITRunnersLogo.png" />
                            </div>
                            <div class="wrap-input">
                                <div class="font">
                                    <span>Waarom ben je absent?</span>
                                </div>
                                <div>
                                    <textarea name="userInput" id="message" cols="38" rows="8" required></textarea>
                                </div>
                            </div>
                            <div class="submit-button-absent">
                                <input class="submit-absent" type="submit" name="submit-reden">
                            </div>
                        </form>
                    </div>
                </div>
            <?php }
            if (isset($_COOKIE["presentie"]) && $_COOKIE["presentie"] === "present") { ?>
                <div class="message-container">
                    <div class="message-box">
                        <div class="logo">
                            <img alt="BIT Runners" src="images/BITRunnersLogo.png" />
                        </div>
                        <form class="form" action="planningHandler.php" method="post">
                            <div class="question">
                                <p>Wat is jouw plan voor vandaag?</p>
                            </div>
                            <div class="select">
                                <select id="main_menu" name="modules" required>
                                    <option value="" disabled selected hidden>- Modules -</option>
                                    <optgroup label="-- Modules --"></optgroup>
                                    <option value="developmentStart">Development - Start</option>
                                    <option value="htmlcss">HTML / CSS</option>
                                    <option value="HTMLCSSAdvanced">HTML / CSS - Advanced</option>
                                    <option value="gitBeginner">Git - Beginner</option>
                                    <option value="phpBeginner">PHP - Beginner</option>
                                    <option value="phpNovice">PHP - Novice</option>
                                    <option value="phpWeb">PHP - Web</option>
                                    <option value="phpTogether">PHP - Together</option>
                                    <option value="project1BasisScrum">Project 1 - Basis Scrum</option>
                                    <option value="javaScriptIntroduction">JavaScript - Introduction</option>
                                    <option value="databasesBeginner">Databases - Beginner</option>
                                    <option value="databasePDO">Database - PDO</option>
                                    <option value="project2VerdiepingScrum">Project 2 - Verdieping Scrum</option>
                                    <option value="project3EindprojectJaar1">Project 3 - Eindproject Jaar 1</option>
                                    <option value="stage1">Stage 1</option>
                                </select>
                            </div>

                            <div class="select">
                                <select id="sub_menu" name="hoofdstuk" required>
                                    <option value="" disabled selected hidden>- Hoofdstuk -</option>
                                </select>
                            </div>
                            <div class="textarea">
                                <textarea name="opdracht" id="message" cols="40" rows="7" placeholder="Bij welke excercise ben je momenteel, en wat is de planning?" required></textarea>
                            </div>
                            <div class="sent">
                                <button class="submit-button" type="submit" name="submit-planning">Verzenden</button>
                            </div>

                            <script src="scripts/dynamic.js"></script>

                        </form>
                    </div>
                </div>
            <?php } ?>
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