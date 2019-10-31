<div class = "mp-dynamic-content-container">

<?php
    // Open the connection
    include '../includes/connection.php';
    
    // MySQL query
    $query = "SELECT * FROM `monthly_projects`";
    $result = mysqli_query($conn, $query);
    
    while($row = mysqli_fetch_assoc($result)) {
        makeNewMonthlyProjectsBox($row['month'], $row['img_path'], $row['project_title'], $row['mini_description']);
    }
    
    function makeNewMonthlyProjectsBox($month, $imgPath, $title, $miniDescription){
        echo 
            "<div class = \"mp-dynamic-content-box-left\">
        <div class = \"mp-dynamic-content-title\">
            $month
        </div>
        <div class = \"mp-dynamic-content-image\">
            <img src = '$imgPath'>
        </div>
        <div class = \"mp-dynamic-content-title\">
            $title
        </div>
        <div class = \"mp-dynamic-content-description\">
           $miniDescription
        </div>
    </div>";
    }

?>

<!-- Static example for boxes
    <div class = "mp-dynamic-content-box-left">
        <div class = "mp-dynamic-content-title">
            September
        </div>
        <div class = "mp-dynamic-content-image">
            <img src = "../img/index/duo-ros-thumb.jpg">
        </div>
        <div class = "mp-dynamic-content-title">
            Duolingo vs Rosetta Stone
        </div>
        <div class = "mp-dynamic-content-description">
           This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! 
        </div>
    </div>

    <div class = "mp-dynamic-content-box-middle">
        <div class = "mp-dynamic-content-title">
            September
        </div>
        <div class = "mp-dynamic-content-image">
            <img src = "../img/index/duo-ros-thumb.jpg">
        </div>
        <div class = "mp-dynamic-content-title">
            Duolingo vs Rosetta Stone
        </div>
        <div class = "mp-dynamic-content-description">
           This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! 
        </div>
    </div>

    <div class = "mp-dynamic-content-box-right">
        <div class = "mp-dynamic-content-title">
            September
        </div>
        <div class = "mp-dynamic-content-image">
            <img src = "../img/index/duo-ros-thumb.jpg">
        </div>
        <div class = "mp-dynamic-content-title">
            Duolingo vs Rosetta Stone
        </div>
        <div class = "mp-dynamic-content-description">
           This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! 
        </div>
    </div>-->

</div>