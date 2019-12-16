<?php

$usernameAndPassword = [["Guillermo", "123"], ["1", "11"]];
$adminUsernameAndPassword = [["Admin", "11"],["Admin2", "Admin2"]];

echo "username aub" . PHP_EOL;
$userName = readline("> ");
echo "pass aub" . PHP_EOL;
$userPass = readline("> ");


if (isset($_POST["submit-present"])) {
    foreach ($usernameAndPassword as $user) {
        if ($user[0] === $userName) {
            if ($user[1] === $userPass) {
                $choice = "present";
            } else echo "wrong pass";
        }
    }
}
