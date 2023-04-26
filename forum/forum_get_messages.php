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

    function get_all_messages($topic, $limit, $offset){
        $messages = readMessagesFromDatabase(trim($topic), $limit, $offset);
        $string = "";

        while ($message = $messages->fetchArray()){
            $string .= format_to_html($message['Zeitpunkt'], $message['User'], $message['Inhalt']) . "\n";
        }

        return $string;
    }    
?>