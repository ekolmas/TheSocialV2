<?php
require_once "config.php";
require_once "./views/header.php";
require_once "./controllers/indexController.php";
?>

<head>
    <link rel="stylesheet" href="views/css/index.css">
</head>

<body>
    <div class="logoContainer">
        <img src="views/images/logo3.png" alt="logo" class="logo">
    </div>

    <div class="scene">
        <div class="first blade">
            <article class="videoIntro">

            </article>

            <article class="productIntro">
                <section class="productIntroCard"></section>
                <section class="productIntroCard"></section>
            </article>
        </div>
        <div class="second blade"></div>
        <div class="third blade"></div>
    </div>
</body>