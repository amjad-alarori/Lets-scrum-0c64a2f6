<?php

function planGisteren() {
$date = date("m-d-Y", time() - 60 * 60 * 24);
$textfile = convertFileToArray("textfile.txt");

foreach ($textfile as $line) {
    if ($planningCheck = strpos($line, "Planning")) {
        $chosenLine = substr($line, $planningCheck);
        if (strpos($chosenLine, $date)) {
        $stripped = substr($line, strpos($line, "::") + 1);
        $planGisteren = str_replace(": ", "", $stripped);
        return $planGisteren;
        break;
        }
    }
}
}
function convertFileToArray($file)
{
    $array = file_get_contents($file);
    $array = explode("\n", $array);
    return $array;
}

echo planGisteren();