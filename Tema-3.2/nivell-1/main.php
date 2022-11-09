<?php 

function countTo($limit = 10) {
    $start = 0;
    while ($start <= $limit){
        echo $start,"<br>";
        $start += 2;
    }
}

echo countTo();
?>