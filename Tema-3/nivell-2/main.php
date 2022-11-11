<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="wclassth=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Exercici 1<h1>
    <form action="example.php" method="get">
        First Number: <input type="number" name="num1">
        <br>
        Second Number: <input type="number" name="num2">
        <br>
        <input type="submit" name="submit" value="submit">
        <br>
    </form>
    <p>The answer is:</p>
    <?php    
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];

        if ($num1 == $num2) {
            echo ($num1 + $num2) * 2;
        } else{
            echo ($num1 + $num2);
        }
    ?>
</body>

</html>