<?php

$day = 60 * 60 * 24;
$choice = "present";
$totaalAantalDagen = 100;


function dailyChecker($totaalAantalDagen, $day, $choice) {
    while (1 == 1) {
        sleep(1);
        $totaalAantalDagen =+ 1;
        $presentCounter = 24;
        if ($choice === "absent") {
            dailyCheckerAbsent($presentCounter, $totaalAantalDagen);
        }
        if ($choice === "present") {
            dailyCheckerPresent($presentCounter, $totaalAantalDagen);
        }  
    }
}

function dailyCheckerAbsent($presentCounter, $totaalAantalDagen) {
    $presentiePercentage = $presentCounter / $totaalAantalDagen * 100;
    echo $presentiePercentage . "%";
}

function dailyCheckerPresent($presentCounter, $totaalAantalDagen) {
    $presentCounter =+ 1;
    $presentiePercentage = $presentCounter / $totaalAantalDagen * 100;
    echo $presentiePercentage . "%";
}


dailyChecker($choice, $day, $totaalAantalDagen);