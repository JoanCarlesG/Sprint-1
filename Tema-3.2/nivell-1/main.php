<?php 

$limit = 23;
function countTo($limit) {
    $start = 0;
    while ($start <= $limit){
        echo $start,"<br>";
        $start += 2;
    }
    if($limit % 2 != 0){
        echo $limit;
    }
}

echo countTo($limit);
?>