<!-- Added to gitignore since it contains the hashed password -->
<!DOCTYPE html>
<html>

    <?php include '../includes/header.php'; ?>
    <?php include '../includes/navbar.php'; ?>
    <?php include '../includes/functions.php'; ?>

    <?php
        // Session stuff for logging in
        session_start();

        $isLoggedIn = false;
        $logInOrOut = 'Login';

        $_GET['postconfirmation'] = 'null';
        $postConfirmation = "<div style = \"color:#1f1f1f;font-size:20px;\">Post has been successfully posted!</div>";

        if(isset($_POST['login'])){
            $passHash = '$2y$10$TaLkvyfwov2ESFHjW3rGNOfBDDjUK6gyR72QGgqUWDR0qLFW7c3Ye';
            $formPassword = validateFormData($_POST['password']);

            if(password_verify($formPassword, $passHash)){
                // Make the new post box visible
                $isLoggedIn = true;
                $logInOrOut = 'Logout';
            }
        } else {
            // TODO: Set something here that just puts text on the login form saying they can't log-in unless they're, well, me
        }
    ?>

    <!-- Custom CSS for Markside -->
    <link rel = "stylesheet" type = "text/css" href = "../css/markside_styles.css">

    <!-- Some quick style changes -->
    <style>

    /* Change the navbar tabs gray and the portfolio tab red */
    .navbar-markside {
        color: #2980b9;
    }
    </style>

    <body>

    <div class = "markside-login-bubble">
        <p><?php echo $logInOrOut ?></p>
    </div>

    <!-- This won't be visible until jQuery makes it sos -->
    <div class = "markside-login-form">
        <form action = "markside.php" method = "post">
            <label for = "password">Password, please!</label>
            <input name = "password" type = "password" placeholder = "You won't know this...">
            <button type = "submit" name = "login">Submit</button>
        </form>
    </div>

    <div id = "markside-banner">
        <h1 id = "markside-title">Markside</h1>
        <h2 id = "markside-subtitle">An attempt at a blog on my 'side' of the internet.</h2>

    <?php

        // If logged in, show the thing to make a new post

        if($isLoggedIn) {

            // Show the post has been made successfully
            if($_GET['postconfirmation'] == 'true'){
                echo $postConfirmation;
            }
    ?>
            <!-- This only shows if you're logged in -->
            <div class = "markside-newpost-container">
                <form action = "./scripts/submit_post.php" method = "post">
                    <label for = "postTitle">Title:</label><br>
                    <input name = "postTitle" type = "text">
                    <br>
                    <label for = "bodyText">Post Body:</label><br>
                    <textarea name = "bodyText" type = "text"></textarea>
                    <br>
                    <button type = "submit" name = "makenewpost">Make Post</button>
                </form>
            </div>
    <?php
        }

    ?>
    </div>

    <div id = "markside-columns-container">
        <div id = "markside-left-column">

        <!-- PHP code to make posts -->
        <?php
            // Open the connection
            include '../includes/connection.php';

            // Get the results starting with the most recent one first
            $query = "SELECT * FROM `markside` ORDER BY `id` DESC";
            $result = mysqli_query($conn, $query);

            // Loop through the last five rows
            $counter = 0;
            while($row = mysqli_fetch_assoc($result)){
                makeNewBlogPost($row['title'], $row['date'], $row['content']);
                $counter++;
                if($counter >= 5) break;
            }

            function makeNewBlogPost($postTitle, $postDate, $postContent){
                echo
                    "<div class = \"markside-blog-post\">
                        <h1>$postTitle</h1>
                        <h2 class = \"markside-blog-post-date\">$postDate</h2>
                        <hr>
                        <p>$postContent
                    </div>"

                ;
            }
        ?>

        </div>
        <div id = "markside-right-column">
            <p>RC</p>
        </div>
    </div>

    <?php mysqli_close($conn) ?>


<script>
    let visible = false;
    $(".markside-login-bubble").click(function(){
        if($(this).text().includes('Login')){
            if(!visible){
                $(".markside-login-form").css('opacity','100');
                visible = true;
            } else {
                $(".markside-login-form").css('opacity','0');
                visible = false;
            }
        } else {
            window.location = window.location.origin + '/portfolio/markside';
        }
    })
</script>
</body>
</html>