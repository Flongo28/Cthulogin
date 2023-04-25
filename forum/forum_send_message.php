<?php
    include 'forum_topic_db.php';
    include '../verwaltung/links.php';

    $topic = $_POST['forum_kuerzel'];
    $message = $_POST['message'];

    session_start();

    if (isset($_SESSION['name'])) {
        $creator = $_SESSION['name'];
        post_message($topic, $creator, $message);
        header('Location: ../forum_comments.php?forum_kuerzel="' . $topic. '"');
    } else {
        echo "Username not set";
    }
?>