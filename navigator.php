<?php
  require 'login/login_check.php';
  include 'navigator/navigator_functions.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dateimanager</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="content">
        <?php
            // Überprüfen, ob ein Verzeichnis ausgewählt wurde
            if(isset($_GET['dir'])){
                $dir = $_GET['dir'];
            } else {
                $dir = '.';
            }

            // Auflisten aller Ordner im aktuellen Verzeichnis
            listFilesAndDirectories($dir);
        ?>

        <form action="navigator/upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload File" name="submit">
        </form>
    </div>
</body>
</html>

