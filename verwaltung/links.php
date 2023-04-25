<?php
    class Links{
        const FORUM = "forum.php";
        const HEADER = "header.php";
        const LOGIN = "login.php";
        const NAVIGATOR = "navigator.php";
        const CONTENT = "content.php";
        const REGISTER = "register.php";

        const STYLE_SHEET = "styles/style.css";
        const UPLOAD_FILE = "navigator/upload.php";
        const NAVIGATOR_COMMANDS = "navigator/navigator_functions.php";

        public static function get_forum($kuerzel){
            return "forum_comments.php?forum_kuerzel=" . $kuerzel;
        }
    }
?>