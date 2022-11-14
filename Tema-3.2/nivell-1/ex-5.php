<?php 
$nota = 5.1;
function countTo($nota) {

    if ($nota < 3.33){
        $grau = "Suspès.";
    } else if ($nota >= 3.33 && $nota <= 4.4){
        $grau = "Tercera Divisió.";
    } else if ($nota >= 4.5 && $nota <= 5.9){
        $grau = "Segona Divisió.";
    } else if ($nota >= 6){
        $grau = "Primera Divisió.";
    }
    $nota = $nota * 10;

    echo "$nota %, $grau";
}
echo countTo($nota);
?>