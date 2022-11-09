<?php 
$age = 28;
function checkAge($age) {

    if($age % 2 == 0){
        return "Age: $age is even";
    } else{
        return "Age: $age is odd";
    }
}

echo checkAge($age);
?>