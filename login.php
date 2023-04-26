<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Cthulogin</title>

    <?php include 'verwaltung/links.php'; echo Links::get_all_html_docs(); ?>
  </head>
  <body>
    <?php 
      include 'header.php';
    ?>

    <div class="content">
        <div class="register-form">
            <h2>Login</h2>
            <form method="POST" action="login/login.php">
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" required>
        
              <label for="password">Passwort:</label>
              <input type="password" id="password" name="password" required>
        
              <input type="submit" value="Login">
            </form>
          </div>
    </div>
  </body>
</html>