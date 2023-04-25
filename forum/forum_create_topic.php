<?php
    include 'forum_topic_db.php';
    include '../verwaltung/links.php';

    $kuerzel = str_replace(" ", "-", trim(strtolower($_POST['kuerzel'])));
    $new_topic = $_POST['topic'];

    session_start();
    if (isset($_SESSION['name'])) {
        $creator = $_SESSION['name'];
        create_forum($kuerzel, $new_topic, $creator);
        header('Location: ../' . Links::FORUM);
    }
?>