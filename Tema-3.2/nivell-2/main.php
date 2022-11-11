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
    Exercici 3
    <form action="main.php" method="get">
        Xocolata (1€): <input type="number" name="xoco">
        <br>
        Xiclets (0,5€): <input type="number" name="gum">
        <br>
        Caramels (1,5€): <input type="number" name="candy">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        function costXoco($units){
            return $units;
        }
        function costGum($units){
            return $units * 0.5;
        }
        function costCandy($units){
            return $units * 1.5;
        }
        
        echo "Xocolata: ", $_GET["xoco"], "<br>";
        echo "Xiclets: ", $_GET["gum"], "<br>";
        echo "Caramels: ", $_GET["candy"], "<br>";
        echo "Total: ";
        echo costXoco($_GET["xoco"]) + costGum($_GET["gum"]) + costCandy($_GET["candy"]);
        echo "€";
    ?>
</body>

</html>