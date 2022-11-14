<?php 
function isBitten(){
    $num = rand(1,10);
    if ($num > 5 && $num <= 10){
        return TRUE;
    } else {
        return FALSE;
    }
}
echo isBitten();
?>