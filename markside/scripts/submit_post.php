<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $name = "portfolio_site";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $name);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if(isset($_POST['makenewpost'])){
        $postTitle = $bodyText = '';

        if(!$_POST['postTitle'] || !$_POST['bodyText']) {
            // TODO: Put an error message and keep what was written...?
        } else {
            $postTitle = $_POST['postTitle'];
            $bodyText = $_POST['bodyText'];

            $query = "INSERT INTO `markside` (id, title, content, date, edited)
            VALUES (NULL, '$postTitle', '$bodyText', CURRENT_TIMESTAMP, 0)";

            $result = mysqli_query($conn, $query);

            if($result){
                header("Location: ../markside.php?postsuccess=true");
            } else {
                echo "Not successful...";
                echo mysqli_error($conn);
            }
        }
    }

    mysqli_close($conn);
?>