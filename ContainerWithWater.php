<?php
$height = [1,8,6,2,5,4,8,3,7];

function maxArea($height) {
    $left = 0;
    $right = count($height) - 1;
    $maxArea = 0;

    while ($left < $right) {
        $h = min($height[$left], $height[$right]); // this returns the lesser of the two heights
        $w = $right - $left; // this returns the length;
        $area = $h * $w; // temporary counter
        if ($area > $maxArea) {
            $maxArea = $area;
        }

        // Move the pointer from the shorter line
        if ($height[$left] < $height[$right]) {
            $left++;
        } else {
            $right--;
        }
    }

    return $maxArea;
}


echo min(8, 9);

?>
