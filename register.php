<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Registrierung</title>
    <link rel="stylesheet" href="styles/style.css">
    <script src="login/registersite.js"></script>
  </head>
  <body>
    <?php include 'header.php'; ?>
    
    <div class="content">
        <div class="register-form">
            <h2>Registrieren</h2>
            <form method="POST" action="login/register.php" onsubmit="return validateForm()">
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" required>
        
              <label for="email">E-Mail:</label>
              <input type="email" id="email" name="email" required>
        
              <label for="password">Passwort:</label>
              <input type="password" id="password" name="password" required>

              <label for="password_wdh">Wiederhole Passwort:</label>
              <input type="password" id="password_wdh" name="password_wdh" required>
        
              <input type="submit" value="Registrieren">
            </form>
          </div>
    </div>
  </body>
</html>
