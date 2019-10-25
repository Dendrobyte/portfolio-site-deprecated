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
        <div class = "section-left">
            <div class = "banner-left">
                <h2 class = "banner-header">About Me</h2>
            </div>
            <div class = "description">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>

        <div class = "section-right">
            <div class = "banner-right">
                <h2 class = "banner-header">Interests</h2>
            </div>
            <div class = "description">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>

        <div class = "section-left">
            <div class = "banner-left">
                <h2 class = "banner-header">Education</h2>
            </div>
            <div class = "description">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a href = "resume"></a>
            </div>
        </div>

        <div class = "section-right">
            <div class = "banner-right">
                <h2 class = "banner-header">Miscellaneous</h2>
            </div>
            <div class = "description">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>

    <div id = "bottom-third-title">Stay Updated</div>

    <div id = "bottom-third-container">

        <div class = "section-left-column">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class = "recent-box">
                <!-- Automatically grab your latest YouTube video here. Would have to be upon page load. -->
                <h3>Video Title</h3>
                <h6>Video Description</h6>
            </div>
            <div class = "recent-box">
                <!-- Automatically pull the latest monthly project update here-
                    Have this update when you make a new post so that you don't have to do it on load or something...! -->
                <h3>Project Title</h3>
                <h6>Project Description</h6>
            </div>
            <div class = "recent-box">
                <!-- Automatically pull the latest markside blog post here. See details above -->
                <h3>Blog Post Title & Timestamp</h3>
                <h6>Blog Post, first chunk</h6>
            </div>
        </div>

        <div class = "col-divide"></div>

        <div class = "section-right-column">
            <p class = "column-header">Want to reach out to me for whatever reason? Feel free to use the following form! Even if it's just to say hi, feel free to send a form on in.</p>
            <form class = "contact-form">
                <!-- Don't forget to make this dynamic! See index_form.php and explain why it's not on git -->
                <span class = "form-inline">
                    <p>Name</p>
                    <input type = "text" class = "half-text" placeholder = "Mark Bacon">
                    <p>Email</p>
                    <input type = "text" class = "half-text" placeholder = "mbacon@m.net">
                </span>

                <p>Reason</p>
                <select name = "Reasons" placeholder = "What's this about?" class = "wide-text" >
                    <option value="question">General Question</option>
                    <option value="business">Business Inquiry</option>
                    <option value="freelance">Hire for Editing</option>
                    <option value="hello">Just saying hi!</option>
                </select>

                <p>Subject</p>
                <input type = "text" class = "wide-text">

                <p>How Can I Help?</p>
                <input type = "text" class = "wide-text">
            </form>
        </div>

    </div>
</body>

<!-- Load up JS last as to not lag the page -->
<script src = "js/index_scripts.js"></script>
</html>