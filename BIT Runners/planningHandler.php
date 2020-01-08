<?php
require "planVandaagEnGisterenHandler.php";

$date = date("l m-d-Y h:i:s");
$planVoorDag = date("m-d-Y");

// Form
$absentPresent = $_COOKIE["presentie"];

if (isset($_POST["submit-reden"]) || isset($_POST["submit-planning"])) {
    setcookie("setplanning", "YES");
}

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
    $module = $_POST["modules"];
    $hoofdstuk = $_POST["hoofdstuk"];
    $opdracht = $_POST["opdracht"];
    $planning = "module $module, hoofdstuk $hoofdstuk, opdracht $opdracht"; 
    $user = "Input Time: " . $date . " Planning voor " . $planVoorDag . " van " . $_COOKIE["naam"] . ":: " . $planning . PHP_EOL;
    fwrite($file, $user) or die("Can't write to file.");
    fclose($file) or die("Can't close file.");
    setcookie("planVandaag", planVandaag());
    setcookie("planGisteren", planGisteren());
    header("location:dashboard.php");
}