<?php
require_once "handler.php";
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
                    </div><br>

                    <form action="handler.php" method="post">


                    
        
            <div class="select-style">
            <select id="main_menu">
                    <option value="" disabled selected hidden>- Modules -</option>
                    <optgroup label="-- Modules --"></optgroup>
                    <option value="DevelopmentStart">Development - Start</option>
                    <option value="htmlcss">HTML / CSS - Advanced</option>
                    <option value="gitbeginner">Git - Beginner</option>
                </select>



            </div><br>
            <div class="select-style">
            <select id="sub_menu"></select>
            </div><br>
                
            


<!--Textarea with icon prefix-->
<div class="md-form amber-textarea active-amber-textarea">
  <i class="fas fa-pencil-alt prefix"></i>
  <textarea id="form22" class="md-textarea form-control" rows="3"></textarea>
  
</div>



                        
                        <div>
                            <button class="button" type="submit" name="submit-planning">Verzenden</button>
                        </div>
            
        </div>

    
    <script src="scripts/dynamic.js"></script>
                        

                        
                    </form>
                </div>
            </div>
        <?php } ?>
    </div>

</body>

</html>