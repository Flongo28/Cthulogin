<?php
function check_sql_injection($str) {
  // Listen von verbotenen Begriffen und Zeichenfolgen definieren
  $blacklist = array("SELECT", "INSERT", "UPDATE", "DELETE", "UNION", "JOIN", "WHERE", "OR", "AND");
  $blacklist_regex = "/\b(" . implode($blacklist,"|") . ")\b/i";
  $blacklist_chars = array(";","--");

  // Überprüfen, ob der String verbotene Begriffe oder Zeichenfolgen enthält
  if (preg_match($blacklist_regex, $str)) {
    return true;
  }

  // Überprüfen, ob der String verbotene Zeichen enthält
  foreach ($blacklist_chars as $char) {
    if (strpos($str, $char) !== false) {
      return true;
    }
  }

  return false;
}


?>
