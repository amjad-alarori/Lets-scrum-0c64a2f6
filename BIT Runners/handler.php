<?php
session_start();
$date = date("l m-d-Y h:i:s");
$userName = $_POST["naam"];
$userPass = $_POST["password"];

$usernameAndPassword = [["Guillermo", "123"], ["1", "11"]];
$adminUsernameAndPassword = [["Admin", "11"],["Admin2", "Admin2"]];
$wrongLogin = "Username or Pass incorrect";

// Admin Login & Absent of present

if (isset($_POST["submit-present"])) {
    foreach ($usernameAndPassword as $user) {
        if ($user[0] === $userName) {
            if ($user[1] === $userPass) {
                $choice = "present";
                setcookie("naam", $userName);
                setcookie("presentie", $choice);
                header("location:planningClean.php");
            } else {
                $wrongLogin;
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
                header("location:admin.php");
            } else {
                $wrongLogin;
            }
        } else {
            $wrongLogin;
        }
    }
}

// Write to file Absent of Present 
if (isset($choice)) {
    $_SESSION["name"] = $name;
    $file = fopen("textfile.txt", "a") or die("Unable to open file!");
    $user = "Choice Time: " . $date . " " . $_SESSION["name"] . " is vandaag $choice"  . PHP_EOL;
    fwrite($file, $user);
    fclose($file);
}


// Form
$absentPresent = $_COOKIE["presentie"];


// Planning Write To File
if (isset($_POST["submit-reden"])) {
    $file = fopen("textfile.txt", "a") or die("Can't creat/open file.");
    $reden = $_POST['userInput'];
    $user = "Input Time: " . $date . " Opgegeven reden van " .  $_SESSION["name"] . ": " . $reden . PHP_EOL;
    fwrite($file, $user) or die("Can't write to file.");
    fclose($file) or die("Can't close file.");
    header("location:dashboard.php");
}

if (isset($_POST["submit-planning"])) {
    $file = fopen("textfile.txt", "a") or die("Can't creat/open file.");
    $reden = $_POST['userInput'];
    $user = "Input Time: " . $date . " Planning voor vandaag van " .  $_SESSION["name"] . ": " . $reden . PHP_EOL;
    fwrite($file, $user) or die("Can't write to file.");
    fclose($file) or die("Can't close file.");
    header("location:dashboard.php");
}

// Log out

if (isset($_POST["submit-logout"])) {
    $file = fopen("textfile.txt", "a") or die("Can't creat/open file.");
    $user = "Logout Time: " . $date . " Van " . $_SESSION["name"] . PHP_EOL;
    fwrite($file, $user) or die("Can't write to file.");
    fclose($file) or die("Can't close file.");
    setcookie("naam", $name, -3600);
    setcookie("presentie", $$choice, -3600);
    session_destroy();
    header("location:login.php");
}
