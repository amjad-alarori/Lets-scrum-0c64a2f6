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
                <form action="handler.php" method="post" class="login-form">

                    <div class="logo">
                        <img alt="BIT Runners" src="images/BITRunnersLogo.png" />
                    </div>
                    <div class="wrap-input">
                        <input class="input" type="text" name="naam" autocomplete="off" required>
                        <span class="focus-input" style="font-family: 'BrushScript BT',cursive" data-placeholder="Naam"></span>
                    </div>
                    <div class="buttons">
                        <form action="handler.php" method="post">
                            <input type="submit" value="Present" class="present" id="buttons" name="submit-present">
                            <input type="submit" value="Absent" class="absent" id="buttons" name="submit-absent">
                        </form>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

</html>