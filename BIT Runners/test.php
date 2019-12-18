<?php

$usernameAndPassword = [["Guillermo", "Spa"], ["Maurits" => "Tas"], ["3" => "33"]];

echo "Voer username in" . PHP_EOL;
$userInput = readline("> ");
if (isset($userInput)) {
    echo "Voer wachtwoord in" . PHP_EOL;
    $userPass = readline("> ");
}

foreach ($usernameAndPassword as $user) {
    if ($user[0] === $userInput) { 
        if($user[1] === $userPass) {
            echo "correct";
        } else {
            echo "Username or Pass incorrect";
        }
     }
}
