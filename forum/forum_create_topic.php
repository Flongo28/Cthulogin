<?php
    include 'forum_topic_db.php';

    $kuerzel = $_POST['kuerzel'];
    $new_topic = $_POST['topic'];

    session_start();
    if (isset($_SESSION['name'])) {
        $creator = $_SESSION['name'];
        create_forum($kuerzel, $new_topic, $creator);
    }
?>