<?php
  require_once 'verwaltung/links.php';

  session_start();

  // Überprüfen, ob eine aktive Session vorhanden ist
  if (!isset($_SESSION['name'])) {
    // Session existiert nicht, also wird der Benutzer auf eine Anmeldeseite weitergeleitet oder eine Fehlermeldung ausgegeben
    header('Location: ../'. Links::Login .'?hint="no login"');
    exit;
  }
?>