<?php

require_once 'functions.php';

$db = new PDO('mysql:host=db; dbname=proj2DB', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$getCoinsQuery = $db->prepare('SELECT * FROM `coins`;');
$getCoinsQuery->execute();
$coinsAll = $getCoinsQuery->fetchALL();

$submitCoinQuery = $db->prepare(
    'INSERT INTO `coins` (`coinName`, `yearMinted`, `material`, `diameter`) VALUES (:coinName, :yearMinted, :material, :diameter);');
$submitCoinQuery->bindParam(':coinName', $_POST['coinName']);
$submitCoinQuery->bindParam(':yearMinted', $_POST['yearMinted']);
$submitCoinQuery->bindParam(':material', $_POST['material']);
$submitCoinQuery->bindParam(':diameter', $_Post['diameter']);
$submitCoinQuery->execute();

?>

<html lang="en">
<head>
    <title>My collection</title>
    <meta charset="utf-8">
</head>

<body>
<main>
    <h1>My collection</h1>

    <form action="index.php" method="POST">
        <label for="coinName"><p>Please enter the name of your coin.</p><input type="text" placeholder="Coin name" id="coinName" name="coinName"></label>
        <label for="yearMinted"><p>Please enter the year your coin was minted.</p><input type="text" placeholder="BC||AD yyyy" id="yearMinted" name="yearMinted"></label>
        <label for="material"><p>Please enter the material your coin is made from.</p><input type="text" placeholder="Material" id="material" name="material"></label>
        <label for="diameter"><p>Please enter the diameter of the coin.</p><input type="text" placeholder="xx.xxmm" id="diameter" name="diameter"></label>
        <label for="submitBtn"><p>Submit your coin to your collection.</p><input type="submit" value="Submit coin" " id="submitBtn" name="submitBtn"></label>
    </form>

    <?php echo createItems($coinsAll);?>

</main>
</body>

</html>