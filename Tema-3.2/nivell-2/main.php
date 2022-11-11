<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="wclassth=device-width, initial-scale=1.0">
</head>

<body>
    Exercici 1
    <p>Olimpic years:</p>
    <?php
        $start = 1960;
        $limit = 2016;
        $i = $start;
        do{
            echo "$i <br>";
            $i += 4;
        }while ($i <= $limit);
    ?>
    <br>
    Exercici 2
    <form action="main.php" method="get">
        Input Minuts: <input type="number" name="minuts">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
    
    <p>Total:</p>
    <?php
        function pay(){
            $cost = 0;
            if($_GET["minuts"] < 3){
                echo "Cost is 10 cents.";
            } else if ($_GET["minuts"] >= 3){
                $cost = 10 + (($_GET["minuts"] - 3) * 5);
                echo "Cost is $cost cents.";
            }
        }
        echo pay();
    ?>
</body>

</html>