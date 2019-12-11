<?php
require_once "loginhandler.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Planning</title>
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <link rel="stylesheet" type="text/css" href="css/planning.css">
</head>

<body>
    <div class="navbar">
        <img class="navLogo" src="images/BITRunnesLogo_Zondertekst.png" alt="BITRunners">
        <a href="dashboard.php">Home</a>
        <a href="countdown.php">Focus Timer</a>
        <a href="vakanties.php">Vakanties</a>
        <a class="active" href="planningClean.php">Planning</a>
        <a href="#overzicht">Absentie</a>
        <a href="changelog.php">Changelog</a>
        <form action="handler.php" method="post">
            <button class="logout" type="submit" name="submit-logout">Log uit</button>
        </form>
    </div>
    <div class="all-content">
        <?php if ($absentPresent === "absent") { ?>
            <div class="message-container">
                <div class="message-box">
                    <form action="handler.php" method="post" class="message-form">
                        <div class="logo">
                            <img alt="BIT Runners" src="images/BITRunnersLogo.png" />
                        </div>
                        <div class="wrap-input">
                            <div class="font">
                                <span style="font-family:'BrushScript BT',cursive" ;>Waarom ben je absent?</span>
                            </div>
                            <div>
                                <textarea name="message" id="message" cols="38" rows="8"></textarea>
                            </div>
                        </div>
                        <div class="button">
                            <input class="logout" type="submit" name="submit-reden">
                        </div>
                    </form>
                </div>
            </div>
        <?php }
        if ($absentPresent === "present") { ?>
            <div class="message-container">
                <div class="message-box">
                    <div class="logo">
                        <img alt="BIT Runners" src="images/BITRunnersLogo.png" />
                    </div>
                    <div class="question">
                        <p>Wat is jouw plan voor vandaag?</p>
                    </div>
                    <form action="handler.php" method="post">
                        <div>
                            <select name="modules">
                                <option value="" disabled selected hidden>- Modules -</option>
                                <optgroup label="-- Modules --">
                                    <option value="Development - Start">Development - Start</option>
                                    <option value="HTML / CSS - Beginner">HTML / CSS - Beginner</option>
                                    <option value="HTML / CSS - Advanced">HTML / CSS - Advanced</option>
                                    <option value="Git - Beginner">Git - Beginner</option>
                                    <option value="PHP - Beginner">PHP - Beginner</option>
                                    <option value="PHP - Novice">PHP - Novice</option>
                                    <option value="PHP - Web">PHP - Web</option>
                                    <option value="PHP - Together">PHP - Together</option>
                                    <option value="Project 1 - Basis Scrum">Project 1 - Basis Scrum</option>
                                    <option value="JavaScript - Introduction">JavaScript - Introduction</option>
                                    <option value="Databases - Beginner">Databases - Beginner</option>
                                    <option value="Database - PDO">Database - PDO</option>
                                    <option value="Project 2 - Verdieping Scrum">Project 2 - Verdieping Scrum</option>
                                    <option value="Project 3 - Eindproject Jaar 1">Project 3 - Eindproject Jaar 1</option>
                                    <option value="Stage 1">Stage 1</option>
                            </select>
                            <select name="hoofdstuk">
                                <option value="" disabled selected hidden>- Hoofdstuk -</option>
                                <optgroup label="-- Development - Start --">
                                    <option value="1. How to get started">1. How to get started</option>
                                <optgroup label="-- HTML / CSS - Beginner --">
                                    <option value="1. Mijn profiel">1. Mijn profiel</option>
                                    <option value="2. Mijn profiel - gestyled">2. Mijn profiel - gestyled</option>
                                    <option value="3. Inschrijfformulier">3. Inschrijfformulier</option>
                                    <option value="4. Tournament Schedule">4. Tournament Schedule</option>
                                    <option value="5. Periodic Table">5. Periodic Table</option>
                                    <option value="6. * Google Copy *">6. * Google Copy *</option>
                                    <option value="7. * Is Jarvis that difficult? *">7. * Is Jarvis that difficult? *</option>
                                <optgroup label="-- HTML / CSS - Advanced --">
                                    <option value="1. CSS Advanced">1. CSS Advanced</option>
                                    <option value="2. Flexbox Toegepast">2. Flexbox Toegepast</option>
                                    <option value="3. Position">3. Position</option>
                                    <option value="4. Project">4. Project</option>
                                <optgroup label="-- Git - Beginner --">
                                    <option value="1. Basics">1. Basics</option>
                                    <option value="2. Workflow">2. Workflow</option>
                                    <option value="3. Teamwork">3. Teamwork</option>
                                    <option value="4. * Git Puzzel *">4. * Git Puzzel *</option>
                                <optgroup label="-- PHP - Beginner --">
                                    <option value="1. Getting started">1. Getting started</option>
                                    <option value="2. New operations">2. New operations</option>
                                    <option value="3. More operators??">3. More operators??</option>
                                    <option value="4. Language constructs">4. Language constructs</option>
                                    <option value="5. * Multidimensional Arrays *">5. * Multidimensional Arrays *</option>
                                <optgroup label="-- PHP - Novice --">
                                    <option value="1. Fruity Loops">1. Fruity Loops</option>
                                    <option value="2. Strings 'n arrays">2. Strings 'n arrays</option>
                                    <option value="3. Command line arguments">3. Command line arguments</option>
                                    <option value="4. Wisselgeld">4. Wisselgeld</option>
                                    <option value="5. * Sentiment analysis *">5. * Sentiment analysis *</option>
                                <optgroup label="-- PHP - Web --">
                                    <option value="1. Let's web">1. Let's web</option>
                                    <option value="2. Cookies">2. Cookies</option>
                                    <option value="3. Whoops, error">3. Whoops, error</option>
                                    <option value="4. Web uitgebreid">4. Web uitgebreid</option>
                                    <option value="5. * Wisselgeld web *">5. * Wisselgeld web *</option>
                                <optgroup label="-- PHP - Together --">
                                    <option value="1. Galgje">1. Galgje</option>
                                    <option value="2. Rock Paper Scissors">2. Rock Paper Scissors</option>
                                    <option value="3. * Chatbot *">3. * Chatbot *</option>
                                    <option value="4. * Quiz *">4. * Quiz *</option>
                                <optgroup label="-- Project 1 - Basis Scrum --">
                                    <option value="1. Project">1. Project</option>
                                <optgroup label="-- JavaScript - Introduction --">
                                    <option value=""></option>
                                <optgroup label="-- Databases - Beginner --">
                                    <option value=""></option>
                                <optgroup label="-- Database - PDO --">
                                    <option value=""></option>
                                <optgroup label="-- Project 2 - Verdieping Scrum --">
                                    <option value=""></option>
                                <optgroup label="-- Project 3 - Eindproject Jaar 1 --">
                                    <option value=""></option>
                                <optgroup label="Stage 1">
                                    <option value=""></option>
                            </select>
                        </div>
                        <div class="textarea">
                            <textarea name="opdracht" id="" cols="40" rows="7" placeholder="Bij welke opdracht ben je momenteel, en wat is de planning?"></textarea>
                        </div>
                        <div>
                            <button class="submit-button" type="submit" name="submit-planning">Verzenden</button>
                        </div>
                    </form>
                </div>
            </div>
        <?php } ?>
    </div>

</body>

</html>