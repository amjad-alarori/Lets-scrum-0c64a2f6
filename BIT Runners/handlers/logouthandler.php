<?php
// Log out

if (isset($_POST["submit-logout"])) {
    // $file = fopen("textfile.txt", "a") or die("Can't creat/open file.");
    // $user = "Logout Time: " . $date . " Van " . $_SESSION["name"] . PHP_EOL;
    // fwrite($file, $user) or die("Can't write to file."); //FIXME: functionaliteit weg
    // fclose($file) or die("Can't close file.");
    setcookie("naam", $name, -3600);
    setcookie("presentie", $choice, -3600);
    session_destroy();
    header("location:login.php");
}