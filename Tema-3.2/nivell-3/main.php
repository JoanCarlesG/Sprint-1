<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="wclassth=device-width, initial-scale=1.0">
</head>

<body>
    Exercici 1: Criba d'Eratòstenes
    <form action="example.php" method="get">
        Input Limit: <input type="number" name="limit">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        function findNums($limit){
            $array = range(2, $limit);
            for ($i = 2; $i < sqrt($limit); $i++){
                if ($array[$i]){
                    for ($j = pow($i,2); $j < $limit; $j++){
                        unset($array[$j]);
                    }
                }
            }
            return $array;
        }

        echo var_dump(findNums($_GET["limit"]));
    ?>
</body>

</html>