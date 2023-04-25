<?php
    include 'forum_topic_db.php';

    function format_to_html($time, $name, $message){
        return '<div class="row message">'.
                    '<div class="col-3">' .
                        '<span class="text-muted">'.$name.' | '.$time.'</span>' .
                    '</div>' .
                    '<div class="col-9">' .
                        '<p> '.$message.' <p>' .
                    '</div>' .
                '</div>';
    }

    $topic = "DF";
    $messages = readMessagesFromDatabase($topic);

    foreach ($messages as $message){
        echo format_to_html($message) . "\n";
    }
?>