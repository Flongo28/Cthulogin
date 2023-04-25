<?php
    include 'forum_topic_db.php';
    include '../verwaltung/links.php';
    
    $kuerzel = $_GET['forum_kuerzel'];
    delete_forum($kuerzel);
    header('Location: ../' . Links::FORUM);
?>