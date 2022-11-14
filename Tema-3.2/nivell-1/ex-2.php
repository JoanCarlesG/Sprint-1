<?php 
function countToTen() {
    $start = 0;
    while ($start <= 10){
        echo $start,"<br>";
        $start += 2;
    }
}

echo countToTen();
?>