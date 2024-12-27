<?php
include("helpers/url.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog my sneaker</title>
    <link rel="stylesheet" href="<?= $BASE_URL?>/css/styles.css">
    <!-- fontes gooles -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <head>
        <a href="<?=$BASE_URL?>"id="logo">
            <img src="<?= $BASE_URL ?>/img/logo-snaeker-.png" alt="logo sneaker">
        </a>
        <nav>
            <ul id="navbar">
                <li><a href="<?= $BASE_URL ?>">Home</a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">About</a></li>
                <li><a href="<?= $BASE_URL ?>/contact.php">Contact</a></li>
            </ul>
        </nav>
    </head>
</body>