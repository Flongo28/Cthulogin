<?php
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;

    // Überprüfe, ob die Datei ein Bild ist
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            die("File is not an image.");
            $uploadOk = 0;
        }
    }

    // Überprüfe, ob die Datei bereits existiert
    if (file_exists($target_file)) {
        die("Sorry, file already exists.");
        $uploadOk = 0;
    }

    // Überprüfe die Dateigröße
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        die("Sorry, your file is too large.");
        $uploadOk = 0;
    }

    // Erlaubte Dateiformate
    $allowed_extensions = array("jpg", "jpeg", "png", "gif");
    $file_extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if(!in_array($file_extension, $allowed_extensions)) {
        die("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
        $uploadOk = 0;
    }

    // Wenn alles ok ist, lade die Datei hoch
    if ($uploadOk == 0) {
        die("Sorry, your file was not uploaded.");
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
            die("Sorry, there was an error uploading your file.");
        }
    }
?>
