<?php 
    require 'login/login_check.php'; 
    require_once('verwaltung/links.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Cthulogin</title>

    <?php echo Links::get_all_html_docs(); ?>
  </head>
  <body>
    <?php 
      include 'header.php';
    ?>

    <div class="content">
      <p>Hier siehst du das Grauen</p>
    </div>
</body>
</html>