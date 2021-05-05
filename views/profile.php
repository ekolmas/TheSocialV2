<?php
require_once "../config.php";
require_once "header.php";
require_once "../controllers/profileController.php";
?>


<head>
    <link rel="stylesheet" href="css/profile.css">
    <style>
        <?php
        //can change it so that users can change their header color
        echo ".profileHeader{
            background-image: url(css/images/profile/profileHeaderBackground.png)
        };";
        ?>
    </style>
</head>

<body>
    <div class="profileHeader">
        <h1>This is Namew</h1>
    </div>

    <div class="socialMediaContainer">
        <h2>Social Media</h2>
        <div class="scrollMenu">
            <div class="whatsapp">
                <img src="css/images/profile/socialMedia/whatsapp.png">
                <p>WhatsApp</p>
            </div>
            <div class="instagram">
                <img src="css/images/profile/socialMedia/instagram.png">
                <p>Instagram</p>
            </div>
            <div class="facebook">
                <img src="css/images/profile/socialMedia/facebook.png">
                <p>Facebook</p>
            </div>
            <div class="twitter">
                <img src="css/images/profile/socialMedia/twitter.png">
                <p>Twitter</p>
            </div>
            <div class="linkedIn">
                <img src="css/images/profile/socialMedia/linkedin.png">
                <p>LinkedIn</p>
            </div>
            <div class="telegram">
                <img src="css/images/profile/socialMedia/telegram.png">
                <p>Telegram</p>
            </div>
        </div>
    </div>

    <div class="contact">

    </div>
</body>