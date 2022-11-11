<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="wclassth=device-width, initial-scale=1.0">
</head>

<body>
    Exercici 1
    <form action="example.php" method="get">
        Input Text: <input type="text" name="txt">
        <br>
        <input type="submit" name="submit" value="submit">
        <br>
    </form>
    <p>The answer is:</p>
    <?php
        $txt = $_GET["txt"];
        $txtarray = str_split($txt);
        echo $txtarray[count($txtarray) - 1].substr($txt, 1, -1).$txtarray[0];
    ?>
</body>

</html>