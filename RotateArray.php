<?php

$nums = [1,2,3,4,5,6,7];

$steps = 2;

while ($steps != 0){
    $steps--;
    for($i = count($nums) - 1; $i > 0; $i--){
    $temp = $nums[$i];
    $jump = $nums[$i - 1];
    $nums[$i - 1] = $temp;
    $nums[$i] = $jump;
    }

}

print_r($nums);

$nums = [1, 2, 3, 4, 5, 6, 7];
$steps = 2;

$steps = $steps % count($nums);  // Just in case steps are greater than array length

for ($i = 0; $i < $steps; $i++) {
    // Temporarily store the last element
    $lastElement = array_pop($nums);
    
    // Add the last element to the front of the array
    array_unshift($nums, $lastElement);
}

print_r($nums);
// we want to shift the array
// array_unshift to add to the front
// array_push to add to the back
// or array[]


?>
