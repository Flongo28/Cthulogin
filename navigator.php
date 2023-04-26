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
            <div class="row mb-3">
                <div class="col-md-8">
                    <input class="form-control" type="file" id="fileToUpload">
                </div>
                <div class="col-md-4">
                    <input type="submit" class="btn btn-primary btn-block" value="Upload File" name="submit">
                </div>
            </div>
        </form>
    </div>
</body>
</html>

