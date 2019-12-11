<?php

session_start();
$date = date("l m-d-Y h:i:s");
$userName = $_POST["naam"];
$userPass = $_POST["password"];

$usernameAndPassword = [["Guillermo", "123"], ["1", "11"]];
$adminUsernameAndPassword = [["Admin", "11"],["Admin2", "Admin2"]];
$wrongLogin = "Username or Password incorrect";

if (isset($_POST["submit-present"])) {
    foreach ($usernameAndPassword as $user) {
        if ($user[0] === $userName) {
            if ($user[1] === $userPass) {
                $choice = "present";
                setcookie("naam", $userName);
                setcookie("presentie", $choice);
                header("location:/planningClean.php");
            } else {
                echo $wrongLogin;
            }
        } else {
            $wrongLogin;
        }
    }
} elseif (isset($_POST["submit-absent"])) {
    foreach ($usernameAndPassword as $user) {
        if ($user[0] === $userInput) {
            if ($user[1] === $userPass) {
                echo "correct";
            } else {
                echo "Username or Pass incorrect";
            }
        }
    }
    $choice = "absent";
    setcookie("naam", $name);
    setcookie("presentie", $choice);
    header("location:planningClean.php");
} elseif (isset($_POST["submit-admin"])) {
    foreach ($adminUsernameAndPassword as $user) {
        if ($user[0] === $userName) {
            if ($user[1] === $userPass) {
                setcookie("naam", $userName);
                header("location:/admin.php");
            } else {
                $wrongLogin;
            }
        } else {
            $wrongLogin;
        }
    }
}