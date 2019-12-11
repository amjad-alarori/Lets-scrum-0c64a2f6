<?php
if (isset($choice)) {
    $_SESSION["name"] = $name;
    $file = fopen("textfile.txt", "a") or die("Unable to open file!");
    $user = "Choice Time: " . $date . " " . $_SESSION["name"] . " is vandaag $choice"  . PHP_EOL;
    fwrite($file, $user); //FIXME: functionaliteit weg
    fclose($file);
}
$absentPresent = $_COOKIE["presentie"];
if (isset($_POST["submit-reden"])) {
    $file = fopen("textfile.txt", "a") or die("Can't creat/open file.");
    $reden = $_POST['userInput'];
    $user = "Input Time: " . $date . " Opgegeven reden van " .  $_COOKIE["naam"] . ": " . $reden . PHP_EOL;
    fwrite($file, $user) or die("Can't write to file."); //FIXME: functionaliteit weg
    fclose($file) or die("Can't close file.");
    header("location:dashboard.php");
}