<?php
    /*
    * Erstellen der Datenbank falls diese nicht existiert
    */
    function get_forum_database() {
        // Prüfen, ob SQLite3 installiert ist
        extension_loaded('sqlite3') or die('sqlite3 extension not found');
    
        // Get the directory path of the current file
        $currentDirectory = dirname(__FILE__);

        // Name der Datenbank-Datei
        $dbname = $currentDirectory . "/forum_data.sqlite";

        // SQLite-Datenbank öffnen oder erstellen, falls sie nicht existiert
        $db = new SQLite3($dbname);
    
        // Tabelle für Topics erstellen, wenn sie noch nicht existiert
        $query = "CREATE TABLE IF NOT EXISTS Topics (
                    Kuerzel TEXT PRIMARY KEY,
                    Name TEXT NOT NULL,
                    Ersteller TEXT NOT NULL
                )";
        $db->exec($query);
    
        // Tabelle für Messages erstellen, wenn sie noch nicht existiert
        $query = "CREATE TABLE IF NOT EXISTS Messages (
                    Topic TEXT NOT NULL,
                    User TEXT NOT NULL,
                    Zeitpunkt DATETIME DEFAULT CURRENT_TIMESTAMP,
                    Inhalt TEXT NOT NULL,
                    PRIMARY KEY (Topic, User, Zeitpunkt),
                    FOREIGN KEY (Topic) REFERENCES Topics(Kuerzel) 
                        ON DELETE CASCADE
                        ON UPDATE CASCADE
                )";
        $db->exec($query);
    
        return $db;
    }   
    
    function create_forum($kuerzel, $name, $ersteller) {
        $db = get_forum_database();
    
        // Überprüfen, ob das Kürzel bereits verwendet wird
        $query = "SELECT * FROM Topics WHERE Kuerzel='$kuerzel'";
        $result = $db->query($query);
        if ($result->fetchArray()) {
            echo "Kürzel bereits in Verwendung";
            return;
        }
    
        // SQL-Abfrage zum Einfügen des neuen Forums in die Datenbank
        $query = "INSERT INTO Topics (Kuerzel, Name, Ersteller) VALUES ('$kuerzel', '$name', '$ersteller')";
        $db->exec($query);
        echo "Forum erfolgreich angelegt";
    }

    function delete_forum($kuerzel) {
        $db = get_forum_database();
    
        // Überprüfen, ob das Forum existiert
        $query = "SELECT * FROM Topics WHERE Kuerzel='$kuerzel'";
        $result = $db->query($query);
        if (!$result->fetchArray()) {
            echo "Forum nicht gefunden";
            return;
        }
    
        // SQL-Abfrage zum Löschen des Forums aus der Datenbank
        $query = "DELETE FROM Topics WHERE Kuerzel='$kuerzel'";
        $db->exec($query);
    }

    function get_topics()
    {
        $db = get_forum_database();

        $query = "SELECT * FROM topics";
        $stmt = $db->prepare($query);
        $result = $stmt->execute();

        if(!$result) {
            die("Query error: " . $db->lastErrorMsg());
        }

        $options = "";
        while ($topic = $result->fetchArray(SQLITE3_ASSOC)) {
            $options .= '<option value="' . $topic['Kuerzel'] . '">' . $topic['Name'] . '</option>';
        }

        return $options;
    }

    function get_user_topics($creator)
    {
        $db = get_forum_database();

        $query = "SELECT * FROM topics WHERE Ersteller = :creator";
        $stmt = $db->prepare($query);
        $stmt->bindValue(':creator', $creator, SQLITE3_TEXT);
        $result = $stmt->execute();

        if(!$result) {
            die("Query error: " . $db->lastErrorMsg());
        }

        $options = "";
        while ($topic = $result->fetchArray(SQLITE3_ASSOC)) {
            $options .= '<option value="' . $topic['Kuerzel'] . '">' . $topic['Name'] . '</option>';
        }

        return $options;
    }

    function post_message($topic, $user, $content) {
        $db = get_forum_database();
    
        $query = "INSERT INTO Messages (Topic, User, Inhalt) VALUES (:topic, :user, :content)";
        $stmt = $db->prepare($query);
        $stmt->bindValue(':topic', $topic, SQLITE3_TEXT);
        $stmt->bindValue(':user', $user, SQLITE3_TEXT);
        $stmt->bindValue(':content', $content, SQLITE3_TEXT);
        $result = $stmt->execute();
    
        if(!$result) {
            die("Query error: " . $db->lastErrorMsg());
        }
    }    

    function readMessagesFromDatabase($topic) {
        // Verbindung zur Datenbank herstellen
        $db = get_forum_database();
    
        // SQL-Abfrage zum Auslesen aller Nachrichten
        $query = "SELECT * FROM Messages WHERE Topic = :topic";
        $stmt = $db->prepare($query);
        $stmt->bindValue(':topic', $topic, SQLITE3_TEXT);

        // Ergebnis der Abfrage in einem Array speichern
        $result = $stmt->execute();

        if(!$result) {
            die("Query error: " . $db->lastErrorMsg());
        }
    
        // Ergebnis-Array zurückgeben
        return $result;
    }
?>