<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="wclassth=device-width, initial-scale=1.0">+
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h3>BANK</h3>
    <div>
        <?php
        include "Account.php";
        $account1 = new Account(555, "John", "Smith", 1000);
        ?>
        <h4>User: <?php echo $account1->getNomClient();
                    echo " ", $account1->getCognomClient(); ?></h4>
        <h4>Account Number: <?php echo $account1->getNumCompte(); ?></h4>

    </div>

    <form action="main.php" method="get">
        <!--   
        Name: <input type="text" name="name">
        <br>
        Surname: <input type="text" name="surname">
        <br>
        Account: <input type="number" name="account">
        <br>
        -->
        Amount: <input type="number" name="amount">
        <br>
        <input type="submit" name="Deposit" value="Deposit">
        <input type="submit" name="Withdraw" value="Withdraw">
    </form>
    <?php

    if ($_GET["Deposit"]) {
        $account1->deposit($_GET["amount"]);
    } else if ($_GET["Withdraw"]) {
        $account1->withdraw($_GET["amount"]);
    }
    ?>
    <h4>Account Balance: <?php echo $account1->getSaldo(); ?></h4>
</body>

</html>