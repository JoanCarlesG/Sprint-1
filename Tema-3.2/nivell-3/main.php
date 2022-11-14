<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="wclassth=device-width, initial-scale=1.0">
</head>

<body>
    Exercici 1: Criba d'Eratòstenes
    <form action="main.php" method="get">
        Input Limit: <input type="number" name="limit">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        function findNums($limit){
            $primes = array_fill(0, $limit, false);
            for ($i = 2; $i < $limit; $i++){
                if(!$primes[$i]){
                    echo "$i <br>";
                    for ($j = $i * 2; $j < $limit; $j += $i){
                        $primes[$j] = true;
                    }
                }
            }
        }

       findNums($_GET["limit"]);
    ?>
</body>

</html>