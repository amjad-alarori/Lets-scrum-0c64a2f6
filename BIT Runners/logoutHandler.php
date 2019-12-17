<?php 
$date = date("l m-d-Y h:i:s");


if (isset($_POST["submit-logout"])) {
    $file = fopen("textfile.txt", "a") or die("Can't creat/open file.");
    $user = "Logout Time: " . $date . " Van " . $_COOKIE["naam"] . PHP_EOL;
    fwrite($file, $user) or die("Can't write to file.");
    fclose($file) or die("Can't close file.");
    setcookie("naam", "", -3600);
    setcookie("presentie", "", -3600);
    setcookie("user", "", -3600);
    setcookie("presentiepercentage", "", -3600);
    header("location:login.php");
}
