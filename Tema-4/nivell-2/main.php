<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="wclassth=device-width, initial-scale=1.0">
</head>

<body>
    <?php
    include "PokerDice.php";
    $dice1 = new PokerDice();
    $dice2 = new PokerDice();
    $dice3 = new PokerDice();
    $dice4 = new PokerDice();
    $dice5 = new PokerDice();

    $dice1->throw();
    $dice2->throw();
    $dice3->throw();
    $dice4->throw();
    $dice5->throw();

    $dice1->shapeName();
    $dice2->shapeName();
    $dice3->shapeName();
    $dice4->shapeName();
    $dice5->shapeName();
    ?>
</body>

</html>