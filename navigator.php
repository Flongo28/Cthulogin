<?php
  require 'login/login_check.php';
  include 'navigator/navigator_functions.php';
  require_once('verwaltung/links.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dateimanager</title>

    <?php echo Links::get_all_html_docs(); ?>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container mt-3">
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
            <div class="input-group mb-3">
                <input type="file" class="form-control" id="fileToUpload" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                <button class="btn btn-outline-secondary" type="submit" id="inputGroupFileAddon04">Upload</button>
            </div>
        </form>
    </div>
</body>
</html>

