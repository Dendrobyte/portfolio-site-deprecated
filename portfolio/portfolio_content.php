<?php
// By default, we will load up 'Development'
if(!isset($_GET['activeTab'])){
    $_GET['activeTab'] = 'Development';
}

?>

<!-- Mini navbar -->
<div class = "dynamic-navbar">
    <ul>
        <li class = "dynamic-navbar-item"><p class = "nav-item-development">Development</p></li>
        <li class = "dynamic-navbar-item"><p class = "nav-item-arts">Arts</p></li>
        <li class = "dynamic-navbar-item"><p class = "nav-item-communities">Communities</p></li>
        <li class = "dynamic-navbar-item"><p class = "nav-item-resume">Resume</p></li>
    </ul>
</div>

<!-- TODO: Bottom borders to show the active tab more clearly -->

<div class = "dynamic-content-container">

<?php

// While loop to fill content from database will be located in each if statement.
// There is a static example below the if statements for referencing classes and making each content box.

if($_GET['activeTab'] == 'Development'){
    echo
        "<style>
            .nav-item-development {
                color: #1f1f1f;
                box-shadow: 0px 0px 0px #1f1f1f;
            }
        </style>"
    ;

    echo
        "<div class = \"dynamic-content-box\">
            <div class = \"dynamic-content-title\">
                GitHub - @Dendrobyte
            </div>
            <div class = \"dynamic-content-description\">
            This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! 
            </div>
        </div>

        <div class = \"dynamic-content-box\">
            <div class = \"dynamic-content-title\">
                SpigotMC - @Dendrobyte
            </div>
            <div class = \"dynamic-content-description\">
            This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! 
            </div>
        </div>

        <div class = \"dynamic-content-box\">
            <div class = \"dynamic-content-title\">
                Computer Science
            </div>
            <div class = \"dynamic-content-description\">
            This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! 
            </div>
        </div>"
    ;
} else if ($_GET['activeTab'] == 'Arts') {
    echo
    "<style>
        .nav-item-arts {
            color: #1f1f1f;
            box-shadow: 0px 0px 0px #1f1f1f;
        }
    </style>"
    ;

    echo
    "<div class = \"dynamic-content-box\">
            <div class = \"dynamic-content-title\">
                DeviantArt
            </div>
            <div class = \"dynamic-content-description\">
                Nothing is on here... but sometime soon after my November project! :D
            </div>
        </div>

        <div class = \"dynamic-content-box\">
            <div class = \"dynamic-content-title\">
                ArtStation
            </div>
            <div class = \"dynamic-content-description\">
                Nothing on here either... I'm really shooting for more art stuff :D
            </div>
        </div>"
    ;
} else if ($_GET['activeTab'] == 'Communities') {
    echo
    "<style>
        .nav-item-communities {
            color: #1f1f1f;
            box-shadow: 0px 0px 0px #1f1f1f;
        }
    </style>"
    ;

    echo
    "<div class = \"dynamic-content-box\">
        <div class = \"dynamic-content-title\">
            Oinkcraft
        </div>
        <div class = \"dynamic-content-description\">
            Redstone Oinkcraft is a Minecraft game server I have been running since I was about 13. Over time it has grown into a small community with around 400 active members and 28,000+ unique logins. It is the reason I am programming- I started learning Java so that I could code minigames and plugins for the community. It has also seriously enhanced my ability to manage groups and large events, such as managing a staff team of moderators, event coordinates, development team, etc. You can go ahead and click on the title above to check out the website! :)
        </div>
    </div>

    <div class = \"dynamic-content-box\">
        <div class = \"dynamic-content-title\">
            'Programming'
        </div>
        <div class = \"dynamic-content-description\">
            There's a name that has yet to be determined... but \'Programming\' is a Discord server I just recently revamped in August (go ahead and see my Monthly Projects page to learn more about that process!) THere are over 800 members, and we're starting to see some life in it again. I've had a blast organizing various bimonthly events and Code Golf challenges whilst fostering an environment of help and guidance.
        </div>
    </div>

    <div class = \"dynamic-content-box\">
        <div class = \"dynamic-content-title\">
            Knights of Academia
        </div>
        <div class = \"dynamic-content-description\">
            Knights of Academia, aka 'KOA', is a productivity server with a large presence on a habit forming RPG-style application known as Habitica. I joined their R&D team, alongside the website and narration teams, and have been heavily involved with them for a large while. I've jumped into bot development, meaning a requirement to learn Node JS, and interacting with everyone with the similar interest of productivity has been incredibly fun.
        </div>
    </div>"
    ;

} else if ($_GET['activeTab'] == 'Resume') {
    echo
    "<style>
        .nav-item-resume {
            color: #1f1f1f;
            box-shadow: 0px 0px 0px #1f1f1f;
        }
    </style>"
    ;
    echo "<p style = \"text-align: center; margin: 20px;\">I'm going to put an image of my resume here :)</p>";
}
?>


<!-- Some jQuery to handle the clicking -->
<script>

$(".dynamic-navbar-item").click(function() {
    // Get the text content
    const content = $(this).text();

    // Reload the page with the specific GET variable
    const currentUrl = window.location.href;
    const indexOfQMark = currentUrl.indexOf('?');
    const trimmedUrl = currentUrl.substring(0, indexOfQMark);
    const redirectUrl = trimmedUrl + '?activeTab=' + content;

    // Redirect them
    window.location = redirectUrl;

});
</script>

</div>