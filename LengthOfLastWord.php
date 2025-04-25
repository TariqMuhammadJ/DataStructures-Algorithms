<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
       $increment = 0;
    $length = strlen($s);

    if ($length > 0 && $length < $this->power(10, 4)) {
        // Trim trailing spaces
        for ($i = $length - 1; $i >= 0; $i--) {
            if ($s[$i] != " ") {
                break;
            }
        }

        // Count characters of the last word
        while ($i >= 0 && $s[$i] != " ") {
            $increment++;
            $i--;
        }
    }
    return $increment;
        
    }

    function power($x, $y){
    $total = $x;
    for($i = 0; $i < $y; $i++){
        $total *= $x;
    }
     return $total;}
}

?>
