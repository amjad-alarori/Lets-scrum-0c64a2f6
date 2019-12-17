<?php
$date = date("l m-d-Y h:i:s");
$userName = $_POST["name"];
$userPass = $_POST["password"];

$usernameAndPassword = [["Guillermo", "123"], ["Amjad", "456"],["Maurits", "789"]];
$adminUsernameAndPassword = [["Bob", "admin"], ["Guillermo", "admin"]];

// Admin Login & Absent of present

if (isset($_POST["submit-present"])) {
    foreach ($usernameAndPassword as $user) {
        if ($user[0] === $userName) {
            if ($user[1] === $userPass) {
                $choice = "present";
                setcookie("naam", $userName);
                setcookie("user", "Leerling");
                setcookie("presentie", $choice);
                header("location:planning.php");
                break;
            }
        } else {
            header("location:login.php?err=1");
        }
    }
} elseif (isset($_POST["submit-absent"])) {
    foreach ($usernameAndPassword as $user) {
        if ($user[0] === $userName) {
            if ($user[1] === $userPass) {
                $choice = "absent";
                setcookie("naam", $userName);
                setcookie("user", "Leerling");
                setcookie("presentie", $choice);
                header("location:planning.php");
                break;
            }
        } else {
            header("location:login.php?err=1");
        }
    }
} elseif (isset($_POST["submit-admin"])) {
    foreach ($adminUsernameAndPassword as $user) {
        if ($user[0] === $userName) {
            if ($user[1] === $userPass) {
                setcookie("naam", $userName);
                setcookie("user", "Admin");
                header("location:admin.php");
                break;
            }
        } else {
            header("location:login.php?err=2");
        }
    }
}

// Write to file Absent of Present 
if (isset($choice)) {
    $_COOKIE["naam"] = $userName;
    $file = fopen("textfile.txt", "a") or die("Unable to open file!");
    $user = "Login Time: " . $date . " " . $userName . " is vandaag $choice"  . PHP_EOL;
    fwrite($file, $user);
    fclose($file);
}

// Form
$absentPresent = $_COOKIE["presentie"];