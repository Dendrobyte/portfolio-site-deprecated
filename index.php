<!DOCTYPE HTML>
<html>

    <?php include 'includes/header.php'; ?>
    <!-- Load custom index page css. The other pages will be (much) more consistent in look and layout. -->
    <link rel = "stylesheet" type = "text/css" href = "./css/index_styles.css">

<body>

    <div id = "index-navbar">
        <span class = "index-navbar-item">Home</span>
        <span class = "index-navbar-item">Projects</span>
        <span class = "index-navbar-item">Portfolio</span>
        <span class = "index-navbar-item">Markside</span>
    </div>

    <div id = "top-third-container">
        <img src = "./img/index/profile_circle.png" class = "bubble-picture">
        <h1 class = "line">Heya! I'm Mark</h1>
    </div>

    <!-- Make this width 80% | Also may be cleaner to just center these, or align them across the middle with the diamonds
        being icons above bubbles/boxing with drop shadows or something. Starting to not like the banner thing, but we'll try it! -->
    <div id = "middle-third-container">
        <div class = "mid-third-column">
            <h2>About Me</h2>

            <ul>
                <li>College Sophomore @ NYU</li>
                <li>Hobbyist of all sorts</li>
                <li>"Jack of all trades"</li>
                <li>Love community management</li>
            </ul>
        </div>

        <div class = "mid-third-column">
            <h2>Interests</h2>

            <ul>
                <li>Computer Science (Software & Development)</li>
                <li>Psychology and Linguistics</li>
                <li>How technology helps others see the world</li>
                <li>Video games and their design</li>
            </ul>
        </div>

        <div class = "mid-third-column">
            <h2>Education</h2>

            <ul>
                <li>High School Diploma</li>
                <li>NYU Class of 2022</li>
                <li>B.A. Computer Science</li>
                <li>B.A. Language and Mind (Psycholinguistics)</li>
            </ul>
        </div>

        <div class = "mid-third-column">
            <h2>Miscellaneous</h2>

            <ul>
                <li>It all started with <a href = "http://www.redstoneoinkcraft.com/">Oinkcraft</a></li>
                <li>NYU Class of 2022</li>
                <li>B.A. Computer Science</li>
                <li>B.A. Language and Mind (Psycholinguistics)</li>
            <ul>

            </ul>
        </div>
    </div>

    <div id = "bottom-third-title">Stay Updated!</div>

    <div id = "bottom-third-container">

        <div class = "section-left-column">
            <p class = "column-header">Keep up with all of my latest projects, videos, and various monthly projects. You can find the most recent of each right here!</p>
            <div class = "recent-box">
                <!-- Automatically grab your latest YouTube video here. Would have to be upon page load. -->
                <?php
                    $videoTitle = 'A Failed Hackathon';
                    $videoDescription = ""; // We'll do the longer ones later
                ?>
                <img src = "./img/index/failed-hackathon-thumb.jpg" class = "recent-posts-picture">
                <div class = "recent-box-text">
                    <h3><?php echo $videoTitle; ?></h3>
                    <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h6>
                </div>
            </div>
            <div class = "recent-box">
                <!-- Automatically pull the latest monthly project update here-
                    Have this update when you make a new post so that you don't have to do it on load or something...! -->
                <?php
                    $projectTitle = 'Duolingo vs Rosetta Stone 2';
                    $projectDescription = ""; // We'll do the longer ones later
                ?>
                <img src = "./img/index/duo-ros-thumb.jpg" class = "recent-posts-picture">
                <div class = "recent-box-text">
                    <h3><?php echo $projectTitle; ?></h3>
                    <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h6>
                </div>
            </div>
            <div class = "recent-box">
                <!-- Automatically pull the latest markside blog post here. See details above -->
                <?php
                    $blogPostTitle = 'Welcome to <i>MarkSide</i>';
                    $blogPostDescription = "";
                ?>
                <div class = "recent-box-text">
                    <h3><?php echo $blogPostTitle; ?></h3>
                    <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h6>
                </div>
            </div>
        </div>

        <div class = "col-divide"></div>

        <div class = "section-right-column">
            <p class = "column-header">Want to reach out to me for whatever reason? Feel free to use the following form- even if it's just to say hi!</p>
            <form class = "contact-form">
                <!-- Don't forget to make this dynamic! See index_form.php and explain why it's not on git -->
                <span class = "form-inline">
                    <label class = "label-inline">Name</label><br>
                    <input type = "text" placeholder = "Mark Bacon" class = "half-text">
                </span>
                <span class = "form-inline">
                    <label class = "label-inline">Email</label><br>
                    <input type = "text" placeholder = "mark@mark.mark" class = "half-text"><br>
                </span>

                <label class = "label-block">Reason</label>
                <select name = "Reasons" placeholder = "What's this about?" class = "wide-text" >
                    <option value="question">General Question</option>
                    <option value="business">Business Inquiry</option>
                    <option value="freelance">Hire for Editing</option>
                    <option value="hello">Just saying hi!</option>
                </select>

                <label class = "label-block">Subject</label>
                <input type = "text" class = "wide-text">

                <label class = "label-block">How Can I Help?</label>
                <textarea class = "wide-text long-text" placeholder = "Drop your explanation here! Max of 250 characters."></textarea>
            </form>
            <hr style = "margin-top: 8px;">
            <div class = "github-info">
                <img src = "http://pngimg.com/uploads/github/github_PNG40.png" class = "github-logo">
                <h1 class = "github-h1">This website is on my GitHub!</h1>
                <br>
                <h6 class = "github-h6">Curious about the backbones of the website? You can go ahead and <a class = "github-a" href = "https://github.com/Dendrobyte/portfolio-site">check out the repository on Github here!</a></h6>
            </div>
        </div>

    </div>
</body>

<!-- Load up JS last as to not lag the page -->
<script src = "js/index_scripts.js"></script>
</html>