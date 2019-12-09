<?php
require_once "handler.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Planning</title>
    <link rel="stylesheet" type="text/css" href="css/planning.css">
</head>

<body>
    <?php if ($absentPresent === "absent") { ?>

        <div class="all-content">
            <div class="message-container">
                <div class="message-box">
                    <form action="handler.php" method="post" class="message-form">

                        <div class="logo">
                            <img alt="BIT Runners" src="images/BITRunnersLogo.png" />
                        </div>
                        <div class="wrap-input">

                            <div class="font">
                                <span style="font-family:'BrushScript BT',cursive"; >Waarom ben je absent?</span>
                            </div> <br>

                            <form action="handler.php" method="post">
                                <textarea name="message" id="message" cols="38" rows="8"></textarea>

                        </div>
                        <div class="button">

                            <input class="submitButton" type="submit" name="submit-reden">

                    </form>
                </div>

                </form>
            </div>
        </div>
        </div>



        </form>
    <?php }
    if ($absentPresent === "present") { ?>
        <div class="all-content">
            <div class="message-container">
                <div class="message-box">
                    <div class="logo">
                        <img alt="BIT Runners" src="images/BITRunnersLogo.png" />
                    </div> <br><br>
                    
                    <div class="font">
                        <span style="font-family:'BrushScript BT',cursive"; >Wat is jou plan voor vandaag?</span>
                    </div> <br>
                        
                    
                    <form action="handler.php" method="post">
                        <div class="box">
                            <select name="hoofdstuk">
                            <option value="Hoofdstuk">Hoofdstuk</option>
                            <option value="html">HTML</option>
                            <option value="css">CSS</option>
                            <option value="php">PHP</option>
                            <option value="js">JavaScript</option>
                        </select>
                        <select name="modules">
                            <option value="Modules">Modules</option>
                            <option value="Forming">Forming</option>
                            <option value="Lets count">Lets count</option>
                            <option value="Lets coding">Lets coding</option>
                            <option value="Topoghrafia">Topoghrafia</option>
                        </select>
                        <select name="opdracht">
                        <option value="Opdracht">Opdracht</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </div>
                        </select>

                </div> <br><br><br>
                <div class="button">
                    <input class="submitButton1" type="submit" name="submit-planning">
                </div>
                </form>
            </div>
        </div>
    <?php } ?>

</body>

</html>