<?php
require_once "config.php";
require_once "./views/header.php";
require_once "./controllers/indexController.php";
?>

<head>
    <link rel="stylesheet" href="views/css/index.css">
</head>

<body>
    <div class="page">
        <div class="logoContainer">
            <a href="#"><img src="views/css/images/logo3.png" alt="logo" class="logo"></a>
        </div>
        <div class="videoContainer">
            <video autoplay muted loop class="video1">
                <source src="views\css\videos\Card_GreySmoke.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="intro">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="views/css/images/front.png" alt="Avatar" class="introCardFront">
                    </div>
                    <div class="flip-card-back">
                        <h1>John Doe</h1>
                        <p>Architect & Engineer</p>
                        <p>We love that guy</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>