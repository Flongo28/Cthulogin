<?php
    abstract class Message extends BasicEnum
    {
        const PASSWORD_INVALID = 0;
        const TYPE_DIFFERENT_PASSWORDS = 1;
        const CHOOSE_OTHER_USERNAME = 2;
        const CHOOSE_LONGER_PASSWORD = 3;
    }

    function show_hints(){
        if(isset($_POST['hint'])){
            echo '<script language="javascript">';
            echo 'alert(' . get_message($_POST['hint']) . ')';
            echo '</script>';
        }
    }

    function get_message($hint){
        switch ($hint) {
            case Message::PASSWORD_INVALID:
                return "The password or username is invalid";
            case Message::TYPE_DIFFERENT_PASSWORDS:
                return "The repitition of your passwords is not the same as your password";
        }
    }
?>