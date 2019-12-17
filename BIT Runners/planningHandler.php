<?php
// Form
$absentPresent = $_COOKIE["presentie"];


// Planning Write To File
if (isset($_POST["submit-reden"])) {
    $file = fopen("textfile.txt", "a") or die("Can't creat/open file.");
    $reden = $_POST['userInput'];
    $user = "Input Time: " . $date . " Opgegeven reden van " . $_COOKIE["naam"] . ": " . $reden . PHP_EOL;
    fwrite($file, $user) or die("Can't write to file.");
    fclose($file) or die("Can't close file.");
    header("location:dashboard.php");
}

if (isset($_POST["submit-planning"])) {
    $file = fopen("textfile.txt", "a") or die("Can't creat/open file.");
    $reden = $_POST['userInput'];
    $user = "Input Time: " . $date . " Planning voor vandaag van " . $_COOKIE["naam"] . ": " . $reden . PHP_EOL;
    fwrite($file, $user) or die("Can't write to file.");
    fclose($file) or die("Can't close file.");
    header("location:dashboard.php");
}