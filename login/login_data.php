<?php
require 'injection_check.php';

function get_login_database(){
    extension_loaded('sqlite3') or die('sqlite3 extension not found');

    // Get the directory path of the current file
    $currentDirectory = dirname(__FILE__);

    // Name der Datenbank-Datei
    $dbname = $currentDirectory . '/users.sqlite';

    // SQLite-Datenbank öffnen oder erstellen, falls sie nicht existiert
    $db = new SQLite3($dbname);

    // Tabelle für Benutzer erstellen, wenn sie noch nicht existiert
    $query = "CREATE TABLE IF NOT EXISTS users (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                username TEXT NOT NULL UNIQUE,
                hashword TEXT NOT NULL
            )";
    $db->exec($query);

    return $db;
}

function register($username, $password){
    $db = get_login_database();
    // SQL-Abfrage zum Einfügen des neuen Benutzers in die Datenbank
    $query = "INSERT INTO users (username, hashword) VALUES ('$username', '$password')";
    $db->exec($query);
}

function login($username, $password){
    $db = get_login_database();

    // SQL-Abfrage zur Überprüfung des Benutzernamens
    $username_query = "SELECT * FROM users WHERE username='$username'";
    $username_result = $db->querySingle($username_query, true);

    // Überprüfung, ob der Benutzername vorhanden ist
    if (!$username_result) {
        die("Invalid username");
    }

    // Überprüfung des Passworts
    $hashed_password = $username_result['hashword'];
    if (!password_verify($password, $hashed_password)) {
        die("Incorrect password " . $password . "\t\t" . $hashed_password);
    }

    // Anmeldung erfolgreich
    return true;
}

function is_username_taken($username) {
    $db = get_login_database();

    // SQL-Abfrage zur Überprüfung, ob der Benutzername bereits in der Datenbank vorhanden ist
    $query = "SELECT * FROM users WHERE username='$username'";
    $result = $db->query($query);

    // Überprüfung, ob der Benutzername bereits vorhanden ist
    if($result->fetchArray()) {
        return true;
    } else {
        return false;
    }
}


function save_register($username, $password){
    if (strlen($password) <= 5){
        die("Enter a longer password " . $password . " is to short");
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    if (check_sql_injection($username)){
        die('injection detected');
    }

    if (strlen($username) <= 5){
        die("Enter a longer username");
    }

    register($username, $hashed_password);
}

function save_login($username, $password){
    if (check_sql_injection($username)){
        return false;
    }

    return login($username, $password);
}
?>
