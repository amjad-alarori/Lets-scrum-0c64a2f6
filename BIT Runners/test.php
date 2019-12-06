<?php
if ($absentPresent === "present") { ?>
    <div class="all-content">
        <div class="message-container">
            <div class="message-box">
                <div class="logo">
                    <img alt="BIT Runners" src="images/BITRunnersLogo.png" />
                </div>
                <div class="wrap-input">
                    <div>
                        <p>Wat is jou plan voor vandaag?<P>
                    </div>
                    <form action="handler.php" method="post">

                        <div>
                            <select class="hoofdstuk">
                                <option value="Hoofdstuk">Hoofdstuk</option>
                                <option value="html">HTML</option>
                                <option value="css">CSS</option>
                                <option value="php">PHP</option>
                                <option value="js">JavaScript</option>
                            </select>
                            <select class="modules">
                                <option value="Modules">Modules</option>
                                <option value="Forming">Forming</option>
                                <option value="Lets count">Lets count</option>
                                <option value="Lets coding">Lets coding</option>
                                <option value="Topoghrafia">Topoghrafia</option>
                            </select>
                            <select class="opdracht">
                                <option value="Opdracht">Opdracht</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div> <br><br><br>
                        <div class="button">
                            <input class="submitButton1" type="submit" name="submit-planning">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>