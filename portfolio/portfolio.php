<!DOCTYPE HTML>
<html>

    <?php include '../includes/header.php'; ?>
    <?php include '../includes/navbar.php'; ?>

    <!-- Some quick style changes -->
    <style>

    /* Change the navbar tabs gray and the portfolio tab red */
    .items-right li {
        color: #cfcfcf;
    }

    .navbar-portfolio {
        color: #c34f4f;
    }

    </style>

<body>

<div id = "banner">
    <h1 id = "page-title">Portfolio</h1>
    <h2 id = "page-subtitle"><i>"Jack of all trades, master of none"</i></h2>
    <h3 id = "page-description">You can go ahead and check out my various projects, such as YouTube videos and Github respositories, below! Check out my monthly learning projects <a href = "/../monthly_projects/monthly_proj.php">here!</a></h3>
</div>

<div id = "background">
    <!-- This gets pushed up a little bit to be above the banner -->
    <div id = "content-container">
        <?php
            // Find some way to make this change dynamically... ???? https://stackoverflow.com/questions/9733900/refresh-single-page-php-element-using-button
        ?>
    </div>
</div>

</body>

<!-- Load up JS last as to not lag the page -->
<script src = "/portfolio/scripts/portfolio_script.js"></script>
</html>
