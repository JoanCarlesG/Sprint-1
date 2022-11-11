<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="wclassth=device-width, initial-scale=1.0">
</head>

<body>
    Exercici 1
    <form action="main.php" method="get">
        Input Text: <input type="text" name="txt">
        <br>
        <input type="submit" name="submit" value="Submit">
        <br>
    </form>
    <p>The answer is:</p>
    <?php
        if(isset($_GET["submit"])){
            $txt = $_GET["txt"];
            $txtarray = str_split($txt);
            $trimmedarray = array_filter(array_map("trim",$txtarray));
            echo "<pre>"; 
            echo var_dump($trimmedarray);
            echo "</pre>";
        }
    ?>
</body>

</html>