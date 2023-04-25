<?php
    require_once '../verwaltung/links.php';

    session_start();
    unset($_SESSION['name']);
    header('Location: ../' . Links::LOGIN);
?>