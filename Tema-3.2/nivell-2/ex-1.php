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
</body>

</html>