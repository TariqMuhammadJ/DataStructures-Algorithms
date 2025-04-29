<?php

$val = "bab";
function isPalindrome($val){
    $iterator = 0;
    $tail = strlen($val) - 1;
    while($iterator != $tail){
        if($val[$tail] == $val[$iterator]){
            $iterator++;
            $tail--;
        }
        else{
            return false;
        }
        
        return true;
    }
    
}

echo isPalindrome($val) ? "True" : "False";
?>
