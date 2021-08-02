<?php

$db = new PDO('mysql:host=db; dbname=proj2DB', 'username', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$getCoinNameQuery = $db->prepare('SELECT `coinName` FROM `coins`;');
$getCoinNameQuery->execute();
$coinNames = $getCoinNameQuery->fetchALL();

$getYearMintedQuery = $db->prepare('SELECT `yearMinted` FROM `coins`;');
$getYearMintedQuery->execute();
$coinYearMinted = $getYearMintedQuery->fetchALL();

$getMaterialQuery = $db->prepare('SELECT `material` FROM `coins`;');
$getMaterialQuery->execute();
$coinMaterial = $getMaterialQuery->fetchALL();

$getDiameterQuery = $db->prepare('SELECT `diameter` FROM `coins`;');
$getDiameterQuery->execute();
$coinDiameter = $getDiameterQuery->fetchALL();

?>

<html lang="en">
<head>
    <title>My collection</title>
    <meta charset="utf-8">
</head>

<body>

<h1>My collection</h1>

<p>Item 1</p>
<ul>
    <li>stat 1</li>
    <li>stat 2</li>
    <li>stat 3</li>
</ul>
<p>Item 2</p>
<ul>
    <li>stat 1</li>
    <li>stat 2</li>
    <li>stat 3</li>
</ul>
<p>Item 3</p>
<ul>
    <li>stat 1</li>
    <li>stat 2</li>
    <li>stat 3</li>
</ul>
</body>

</html>