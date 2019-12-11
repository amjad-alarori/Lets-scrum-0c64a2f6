<!DOCTYPE html>

<html>

<head>
    <title>BIT Runners Login</title>
    <link rel="icon" type="image/png" href="images/login.png" />
    <link rel="stylesheet" type="text/css" href="css/loginscreen.css">
</head>

<body>
    <div class="all-content">
        <div class="login-container">
            <div class="login-box">
                <form action="handlers/loginhandler.php" method="post" class="login-form">
                    <div class="logo">
                        <img alt="BIT Runners" src="images/BITRunnersLogo.png"/>
                    </div>
                    <div class="wrap-input">
                        <input class="input" type="text" name="naam" autocomplete="off" required>
                        <span class="focus-input" data-placeholder="Naam"></span>
                    </div>
                    <div class="wrap-input">
                        <input class="input" type="password" name="password" autocomplete="off" required>
                        <span class="focus-input" data-placeholder="Wachtwoord"></span>
                    </div>
                    </form>
                    <form action="handlers/loginhandler.php" method="post" class="presentform">
                        <div class="buttons">
                            <input type="submit" value="Present" class="present" id="buttons" name="submit-present">
                        </div>
                    </form>
                    <form action="handlers/loginhandler.php" method="post" class="absentform">
                        <div class="buttons">
                            <input type="submit" value="Absent" class="absent" id="buttons" name="submit-absent">
                        </div>
                    </form>
                    <form action="handlers/loginhandler.php">
                        <div>
                            <input type="submit" value="Log-in as Admin" class="admin" name="submit-admin">
                        </div>
                    </form>
            </div>
        </div>
    </div>
</body>
</html>
