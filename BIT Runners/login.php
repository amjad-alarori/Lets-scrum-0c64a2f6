<!DOCTYPE html>

<html>

<head>
    <title>BIT Runners Login</title>
    <link rel="icon" type="image/png" href="images/login.png" />
    <link rel="stylesheet" type="text/css" href="css/loginscreen.css">
    <meta charset="utf-8">
    <title>particles.js</title>
    <meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
    <meta name="author" content="Vincent Garreau" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" media="screen" href="css/style.css">
</head>

<body>
    <div class="all-content">
        <div class="login-container">
            <div class="login-box">
                <form action="handler.php" method="post" class="login-form">
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
                    <div class="buttons">
                        <input type="submit" value="Present" class="present" id="buttons" name="submit-present">
                        <input type="submit" value="Absent" class="absent" id="buttons" name="submit-absent">
                    </div>
                    <div>
                        <input type="submit" value="Log-in as Admin" class="admin" name="submit-admin">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>