<?php
    require_once 'login_data.php';
    require_once '../verwaltung/links.php';

    if (save_login($_POST['name'], $_POST['password'])){
        session_start();
        $_SESSION['name'] = $_POST['name'];
        header("Location: ../" . Links::CONTENT);
    } else {
        header('Location: ../' . Links::LOGIN);
    }
?>
