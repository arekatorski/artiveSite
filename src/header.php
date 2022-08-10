<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/style.css">
    <link rel="shortcut icon" href="./src/media/favicon.png" type="image/x-icon">
    <title><?php if(isset($title)) echo $title ?></title>
    <meta name="description" content="<?php if(isset($desc)) echo $desc ?>">
    <meta name="keywords" content="<?php if(isset($kw)) echo $kw ?>">

    <meta property="og:title" content="<?php if(isset($title)) echo $title ?>" />
    <meta property="og:description" content="<?php if(isset($desc)) echo $desc ?>" />
    <meta property="og:image" content="./src/media/favicon.png" />
</head>
<body>
    <?php require("navigation.php") ?>