<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Registrierung</title>

    <?php include 'verwaltung/links.php'; echo Links::get_all_html_docs(); ?>
  </head>
  <body>
    <?php include 'header.php'; ?>
    
    <div class="content">
        <div class="register-form">
            <h2>Registrieren</h2>
            <form method="POST" action="login/register.php" onsubmit="return validateForm()">
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" required>
              <span id="errorShortName" style="color: red; display: none;">Die Eingabe ist zu kurz.</span>
        
              <label for="email">E-Mail:</label>
              <input type="email" id="email" name="email" required>
        
              <label for="password">Passwort:</label>
              <input type="password" id="password" name="password" required>
              <span id="errorShortPassword" style="color: red; display: none;">Die Eingabe ist zu kurz.</span>

              <label for="password_wdh">Wiederhole Passwort:</label>
              <input type="password" id="password_wdh" name="password_wdh" required>
              <span id="errorNotSamePW" style="color: red; display: none;">Die Passwörter sind nicht gleich.</span>
        
              <input type="submit" value="Registrieren">
            </form>
          </div>
    </div>

    <script src="login/registersite.js"></script>
    <script src="login/login_conventions.js"></script>
  </body>
</html>
