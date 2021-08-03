<?php

require_once 'functions.php';

$db = new PDO('mysql:host=db; dbname=proj2DB', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$getCoinsQuery = $db->prepare('SELECT * FROM `coins`;');
$getCoinsQuery->execute();
$coinsAll = $getCoinsQuery->fetchALL();
?>

<html lang="en">
<head>
    <title>My collection</title>
    <meta charset="utf-8">
</head>

<body>
<main>
    <h1>My collection</h1>

    <form>
        <label for=coinName"><input type="text" placeholder="Enter coin name" name="coinName"></label>
        <label for="yearMinted"><input type="text" placeholder="BC||AD yyyy" name="yearMinted"></label>
        <label for="material"><input type="text" placeholder="What material is the coin?" name="material"></label>
        <label for="diameter"><input type="text" placeholder="What is the coin's diameter?" name="diameter"></label>
        <label for="submitBtn"><input type="submit" name="submitBtn"></label>
    </form>

    <?php echo createItems($coinsAll);?>

</main>
</body>

</html>