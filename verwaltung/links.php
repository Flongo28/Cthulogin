<?php
    class Links{
        const FORUM = "forum.php";
        const HEADER = "header.php";
        const LOGIN = "login.php";
        const NAVIGATOR = "navigator.php";
        const CONTENT = "content.php";
        const REGISTER = "register.php";

        const STYLE_SHEET = '<link rel="stylesheet" href="styles/bootstrap_style.css">';
        const BOOTSTRAP = '
        <link rel="stylesheet" 
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous">';

        const UPLOAD_FILE = "navigator/upload.php";
        const NAVIGATOR_COMMANDS = "navigator/navigator_functions.php";

        public static function get_forum($kuerzel){
            return "forum_comments.php?forum_kuerzel=" . $kuerzel;
        }

        public static function get_all_html_docs(){
            echo Links::BOOTSTRAP;
            echo Links::STYLE_SHEET;
        }
    }
?>