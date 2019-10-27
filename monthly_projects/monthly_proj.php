<!DOCTYPE HTML>
<html>

    <?php include '../includes/header.php'; ?>
    <?php include '../includes/navbar.php'; ?>

    <!-- Some quick style changes -->
    <style>

        /* Change the navbar tabs gray and the portfolio tab red */
        .navbar-projects {
            color: #7ad06c;
        }

        .banner-projects {
            background-color: #7ad06c;
        }

    </style>

<body>

<div id = "banner" class = "banner-projects">
    <?php
        // These are the defaults, the actual ones will be stored in the database

        $pageTitle = "Monthly Projects";
        $pageSubtitle = "";
        $pageDescription = "I've always been a 'jack of all trades' guy; trying all these different ideas and wanting to do all parts of a project. Back in 2018, I thought, \"Hey, <a href = \"/../monthly_projects/monthly_proj.php\">what if I did a different thing every month?</a>\" \nIt was only in September of 2019 that I finally made that idea into a reality.";
    ?>
    <div class = "banner-container">
        <h1 id = "page-title"><?php echo $pageTitle ?></h1>
        <h2 id = "page-subtitle"><?php echo $pageSubtitle ?></h2>
        <h3 id = "page-description"><?php echo $pageDescription ?></h3>
    </div>
</div>

<!-- This gets pushed up a little bit to be above the banner -->
<div id = "content-container">
        <div id = "mp-dynamic-container">
                <?php include 'monthlyprojects_content.php'; ?>
        </div>
</div>

</body>

<!-- Load up JS last as to not lag the page -->
<script src = "/portfolio/scripts/portfolio_script.js"></script>
</html>
