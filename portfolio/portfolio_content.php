<?php
// By default, we will load up 'Development'
$activeTab = 'Development';

?>

<!-- Mini navbar -->
<div class = "dynamic-navbar">
    <ul>
        <li class = "dynamic-navbar-item"><p>Development</p></li>
        <li class = "dynamic-navbar-item"><p>Arts</p></li>
        <li class = "dynamic-navbar-item"><p>Communities</p></li>
        <li class = "dynamic-navbar-item"><p>Resume</p></li>
    </ul>
</div>

<div class = "dynamic-content-container">
    <!-- The above div might be the extra padding in the red area issue...? -->
    <div class = "dynamic-content-box">
        <div class = "dynamic-content-title">
            GitHub - @Dendrobyte
        </div>
        <div class = "dynamic-content-description">
           This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! 
        </div>
    </div>
    
    <div class = "dynamic-content-box">
        <div class = "dynamic-content-title">
            SpigotMC - @Dendrobyte
        </div>
        <div class = "dynamic-content-description">
           This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! 
        </div>
    </div>
    
    <div class = "dynamic-content-box">
        <div class = "dynamic-content-title">
            Computer Science
        </div>
        <div class = "dynamic-content-description">
           This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! This is a bunch of sentences! 
        </div>
    </div>
</div>

<?php

// While loop to fill content from database will be located in each if statement.
// There is a static example below the if statements for referencing classes and making each content box.

if($activeTab == 'Development'){

} else if ($activeTab == 'Arts') {

} else if ($activeTab == 'Communities') {

} else if ($activeTab == 'Resume') {

}

// Static example with some boxes
?>