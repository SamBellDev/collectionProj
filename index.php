<?php

require_once 'functions.php';

session_start();

$db = new PDO('mysql:host=db; dbname=proj2DB', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$getCoinsQuery = $db->prepare('SELECT * FROM `coins`;');
$getCoinsQuery->execute();
$coinsAll = $getCoinsQuery->fetchALL();

$submitCoinQuery = $db->prepare(
    'INSERT INTO `coins` (`coinName`, `yearMinted`, `material`, `diameter`) VALUES (:coinName, :yearMinted, :material, :diameter);');
$submitCoinQuery->bindParam(':coinName', $coinName);
$submitCoinQuery->bindParam(':yearMinted', $yearMinted);
$submitCoinQuery->bindParam(':material', $material);
$submitCoinQuery->bindParam(':diameter', $diameter);

if(count($_SESSION) && isset($_POST)) {
    $coinName = $_SESSION['coinName'];
    $yearMinted = $_SESSION['yearMinted'];
    $material = $_SESSION['material'];
    $diameter = $_SESSION['diameter'];
    $submitCoinQuery->execute();
    header("location:index.php");
}

session_unset();
session_destroy();

?>

<html lang="en">
<head>
    <title>My collection</title>
    <meta charset="utf-8">
</head>

<body>
<main>
    <h1>My collection</h1>

    <form action="formValidator.php" method="POST">
        <label for="coinName">Please enter the name of your coin.<input type="text" placeholder="Coin name" id="coinName" name="coinName" required></label>
        <label for="yearMinted">Please enter the year your coin was minted.<input type="text" placeholder="BC||AD yyyy" id="yearMinted" name="yearMinted" required></label>
        <label for="material">Please enter the material your coin is made from.<input type="text" placeholder="Material" id="material" name="material" required></label>
        <label for="diameter">Please enter the diameter of the coin.<input type="text" placeholder="xx.xxmm" id="diameter" name="diameter" required></label>
        <label for="submitBtn">Submit your coin to your collection.<input type="submit" value="Submit coin" id="submitBtn" name="submitBtn"></label>
    </form>

    <?php echo createItems($coinsAll);?>

</main>
</body>

</html>