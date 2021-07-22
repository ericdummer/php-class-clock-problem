<?php

require_once "findAngle.php";
/*
 * Handle Colors
 */

function red($str) {
    return "\033[41m$str\033[0m";
}

function green($str) {
    return "\033[42m$str\033[0m";
}

$testSet  = [
    [12, 0, 0],
    [12, 1, 5],
    [12, 2, 11],
    [12, 3, 16],
    [12, 4, 22],
    [12, 5, 27],
    [12, 6, 33],
    [12, 7, 38],
    [12, 8, 44],
    [12, 9, 49],
    [1, 0, 30],
    [3, 0, 90],
    [6, 0, 180],
    [9, 0, 90],
    [12, 30, 165],
    [5, 59, 174],
];


foreach ($testSet as $set) {
    $hour = $set[0];
    $min = $set[1];
    $paddedMin = str_pad($min, 2, "0", STR_PAD_LEFT);
    $angle = $set[2];
    $result  = findAngle($hour, $min);
    if ($result === $angle) {
       echo green("Correct!") . " the angle for $hour:$paddedMin is $angle\n";
    } else {
        echo red("Incorrect!") . " the angle for $hour:$paddedMin should be $angle not $result\n";
    }
}