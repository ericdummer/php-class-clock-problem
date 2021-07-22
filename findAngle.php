<?php

/**
 * @param int $hour
 * @param int $min
 * @return int
 */

function findAngle(int $hour, int $min): int {
    // find the position of the hour's hand
    $hourDegree = ($hour * 360) / 12;
    $minAdd = ($min * 360) / (12 * 60);
    echo "h: $hourDegree, minAdd: $minAdd\n";

    $h = ($hour * 360) / 12 + ($min * 360) / (12 * 60);

    // find the position of the minute's hand
    $m = ($min * 360) / (60);

    // calculate the angle difference
    $angle = abs($h - $m);

    // consider the shorter angle and return it
    if ($angle > 180) {
        $angle = 360 - $angle;
    }
    return $angle;
}

// Clock Angle Problem

if ($argc > 1 ) {
    $scriptName = $argv[0];
    $hour = $argv[1];
    $min = $argv[2];
    echo "Evaluating: $hour:$min\n";
    echo "Result: " . findAngle($hour, $min) . "\n";
}