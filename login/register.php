<?php
    require_once 'login_data.php';

    if (is_username_taken($_POST['name'])){
        header("Location: ../register.php");
    }

    if ($_POST['password'] == $_POST['password_wdh']){
        save_register($_POST['name'], $_POST['password']);

        if (save_login($_POST['name'], $_POST['password'])){
            session_start();
            $_SESSION['name'] = $_POST['name'];
            header("Location: ../content.php");
        } else {
            header('Location: ../registersite.php');
        }

        header("Location: ../content.php");
    }
?>