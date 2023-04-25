<?php
    include 'forum_topic_db.php';
    
    session_start();
    if (isset($_SESSION['name'])) {
        $creator = $_SESSION['name'];
        echo get_user_topics($creator);
    } else {
        echo "Username not set";
    }
?>