<?php
function beginPieSplitFunction($totalSlices, $recipients, $slicesPerPerson) {
    if ($totalSlices < $recipients * $slicesPerPerson) {
        return false;
    }
    if ($totalSlices % $recipients != 0) {
        return false;
    }
    return true;
}

$NumberOfSlices = 10;
$recipients = 4;
$person_per_slice = 2;

if (beginPieSplitFunction($NumberOfSlices, $recipients, $person_per_slice)) {
    echo "pie can split fairly.";
} else {
    echo "pie cannot split fairly.";
}