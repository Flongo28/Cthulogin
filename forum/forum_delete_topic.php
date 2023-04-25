<?php
    include 'forum_topic_db.php';
    
    $kuerzel = $_POST['kuerzel_delete'];
    delete_forum($kuerzel);
?>