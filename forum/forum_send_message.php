<?php
    include 'forum_topic_db.php';

    $topic = $_POST['forum_kuerzel'];
    $message = $_POST['message'];

    session_start();

    if (isset($_SESSION['name'])) {
        $creator = $_SESSION['name'];
        post_message($topic, $creator, $message);
    } else {
        echo "Username not set";
    }
?>