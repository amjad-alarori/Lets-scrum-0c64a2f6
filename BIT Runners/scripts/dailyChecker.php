<?php

$day = 60 * 60 * 24;
$choice = "present";
$totaalAantalDagen = 99;


function dailyChecker($totaalAantalDagen, $day, $choice) {
    while (1 == 1) {
        sleep(1);
        $totaalAantalDagen =+ 1;
        $presentCounter = 24;
        if ($choice === "absent") { 
            $presentiePercentage = $presentCounter / $totaalAantalDagen * 100;
        }
        if ($choice === "present") {
            $presentCounter =+ 1;
            $presentiePercentage = $presentCounter / $totaalAantalDagen * 100;
        } 
        echo $presentiePercentage . "%"; 
    }
}

dailyChecker ($totaalAantalDagen, $day, $choice);
?>