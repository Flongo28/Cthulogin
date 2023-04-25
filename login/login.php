<?php
    require_once 'login_data.php';

    if (save_login($_POST['name'], $_POST['password'])){
        session_start();
        $_SESSION['name'] = $_POST['name'];
        header("Location: ../content.php");
    } else {
        header('Location: ../loginsite.php?hint="invalid"');
    }
?>
