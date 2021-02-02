<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Social Singapore</title>
    <link rel="stylesheet" href="views/css/nav.css">
</head>

<body>
    <div class="menu">
        <nav class="menu__nav">
            <ul class="menu__list r-list">
                <?php
                session_start();
                if (isset($_SESSION['user'])) {
                    //If there is a user logged in
                } else {
                    //If there isnt a user logged in
                ?>
                    <li class="menu__group">
                        <a href="#0" class="menu__link r-link"><img src="views/images/logo2.png" class="navlogo"></a>
                    </li>
                    <li class="menu__group">
                        <a href="#0" class="menu__link r-link">Home</a>
                    </li>
                    <li class="menu__group">
                        <a href="#0" class="menu__link r-link">Collection</a>
                    </li>
                    <li class="menu__group">
                        <a href="#0" class="menu__link r-link">FAQ</a>
                    </li>
                    <li class="menu__group">
                        <a href="#0" class="menu__link r-link">Videos</a>
                    </li>
                    <li class="menu__group">
                        <a href="#0" class="menu__link r-link">Login</a>
                    </li>
                    <li class="menu__group">
                        <a href="#0" class="menu__link r-link">Sign Up</a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
        <button class="menu__toggle r-button" type="button">
            <span class="menu__hamburger m-hamburger">
                <span class="m-hamburger__label">
                    <span class="menu__screen-reader screen-reader">Open menu</span>
                </span>
            </span>
        </button>
    </div>
    <script src="views/js/nav.js"></script>
</body>