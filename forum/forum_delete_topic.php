<?php
    include 'forum_topic_db.php';
    include '../verwaltung/links.php';
    
    $kuerzel = $_POST['forum_kuerzel'];
    delete_forum($kuerzel);
    header('Location: ../' . Links::FORUM);
?>