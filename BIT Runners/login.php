<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BIT Runners Login</title>
    <link rel="icon" type="image/png" href="images/login.png" />
    <link rel="stylesheet" type="text/css" href="css/loginscreen.css">
</head>

<body>
    <div id="particles-js"> </div>
    <div class="all-content">
        <div class="login-container">
            <div class="login-box">
                <form action="loginHandler.php" method="post" class="login-form">
                    <div class="logo">
                        <img alt="BIT Runners" src="images/BITRunnersLogo.png" />
                    </div>
                    <div class="wrap-input">
                        <label class="labels" for="naam">Naam</label>
                        <input class="input" type="text" name="name" autocomplete="off" required>
                        <span class="focus-input" data-placeholder="Naam"></span>
                    </div>
                    <div class="wrap-input">
                        <label class="labels" for="password">Wachtwoord</label>
                        <input class="input" type="password" name="password" autocomplete="off" required>
                        <span class="focus-input" data-placeholder="Wachtwoord"></span>
                    </div>
                    <div class="wrong-login">
                        <p><?php if ($_GET['err'] == 1) {
                                echo "Username or Password not correct";
                            }
                            if ($_GET['err'] == 2) {
                                echo "Admin-user or Password not correct";
                            } ?></p>
                    </div>
                    <div class="buttons">
                        <input type="submit" value="Present" class="present" id="buttons" name="submit-present">
                        <input type="submit" value="Absent" class="absent" id="buttons" name="submit-absent">
                    </div>
                    <div class="buttons">
                        <input type="submit" value="Log-in as Admin" class="admin" name="submit-admin">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script>
        particlesJS.load('particles-js', 'particles.json',
            function() {
                console.log('particles.json loaded...')
            })
    </script>
</body>

</html>