<!DOCTYPE HTML>
<html>

    <?php include '../includes/header.php'; ?>
    <?php include '../includes/navbar.php'; ?>

    <!-- Some quick style changes -->
    <style>

        /* Change the navbar tabs gray and the portfolio tab red */
        .navbar-portfolio {
            color: #b82f2f;
        }

        .banner-portfolio {
            background-color: #b82f2f;
        }

    </style>

    <body>

        <div id = "banner" class = "banner-portfolio">
            <div class = "banner-container">
                <h1 id = "page-title">Portfolio</h1>
                <h2 id = "page-subtitle"><i>"Jack of all trades, master of none"</i></h2>
                <h3 id = "page-description">You can go ahead and check out my various projects, such as YouTube videos and Github respositories, below! Check out my monthly learning projects <a href = "/../monthly_projects/monthly_proj.php">here!</a></h3>
            </div>
        </div>

        <!-- This gets pushed up a little bit to be above the banner -->
        <div id = "content-container">
            <div id = "dynamic-container">
                <?php include 'portfolio_content.php'; ?>
            </div>
        </div>

    </body>

    <!-- Load up JS last as to not lag the page -->
    <script src = "/portfolio/scripts/portfolio_script.js"></script>
</html>
