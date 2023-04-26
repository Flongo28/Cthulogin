<?php
    function listFile($dir, $file){
        // Überprüfen, ob es sich um das aktuelle oder übergeordnete Verzeichnis handelt
        if ($file == "." || $file == "..") {
            return;
        }

        $path_to_file = $dir . "/" . $file;

        // Bestimmen des Typs des Eintrags (Datei oder Verzeichnis)
        // Tabellenzeile für den Eintrag hinzufügen
        if (is_dir($path_to_file)){
            echo "<tr><td><a href='?dir=$path_to_file'>$path_to_file</a></td><td>'directory'</td></tr>";
        } else {
            echo "<tr><td>$file</td><td>'file'</td></tr>";
        } 
    }

    function getOverFolder($dir){
        // Finde die Position des letzten "/" in der Zeichenkette
        $lastSlashPos = strrpos($dir, '/');

        // Wenn ein "/" in der Zeichenkette gefunden wurde, alles nach dem "/" abschneiden
        if ($lastSlashPos !== false) {
            $new_dir = substr($dir, 0, $lastSlashPos);
        } else {
            $new_dir = '.';
        }

        return $new_dir;
    }

    // Funktion zum Auflisten aller Dateien und Ordner in einem Verzeichnis
    function listFilesAndDirectories($dir) {
        // Überprüfen, ob es sich um ein Verzeichnis handelt
        if (is_dir($dir)) {
            // Möglichkeit um zum Hauptverzeichnis zu gelangen
            if ($dir != '.') {
                $new_dir = getOverFolder($dir);
    
                echo    '<div class="d-flex justify-content-center mt-3 mb-3">
                            <a class="btn btn-secondary" href=\'?dir='.$new_dir.'\' role="button">Übergeordnetes Verzeichnis</a>
                        </div>';
            }

            // Öffnen des Verzeichnisses
            if ($dh = opendir($dir)) {
                // Tabellenkopf
                echo '<table class="table table-striped">';
                echo "<tr><th>Name</th><th>Typ</th></tr>";

                // Schleife durch alle Einträge im Verzeichnis
                while (($file = readdir($dh)) !== false) {
                    listFile($dir, $file);
                }
                // Tabellenende
                echo "</table>";

                // Schließen des Verzeichnisses
                closedir($dh);
            }
        }
    }
?>