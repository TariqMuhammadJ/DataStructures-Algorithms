<?php


$p = "hello";
$w = "h**lo";

function check($p, $w, $i = 0){
    if($i == strlen($w)){
        return true;
    }
    
    if($p[$i] == $w[$i]){
        return check($p, $w, $i + 1);
    }
    
    if($p[$i] !== $w[$i] && $w[$i] == "?"){
        return check($p, $w, $i + 1);
    }
    
    if($p[$i] !== $w[$i] && $w[$i] == "*"){
        return true;
    }
    
    if($p[$i] !== $w[$i]){
        return false;
    }
    
    
    
}

echo check($p, $w) ? "True" : "False";

?>
