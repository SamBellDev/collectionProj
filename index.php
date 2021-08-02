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

    <h1>My collection</h1>

    <?php echo createItems($coinsAll); ?>

</body>

</html>