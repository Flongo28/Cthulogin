<?php
    require_once 'forum_get_messages.php';

    echo get_all_messages($_POST['topic'], $_POST['limit'], $_POST['start']);
?>