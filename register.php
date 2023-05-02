<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Registrierung</title>

    <?php include 'verwaltung/links.php'; echo Links::get_all_html_docs(); ?>
  </head>
  <body>
    <?php include 'header.php'; ?>
    
    <div class="container mt-4">
      <div class="row justify-content-center">
        <div class="col-sm-8 col-md-6">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Registrieren</h2>
              <form method="POST" action="login/register.php" onsubmit="return validateForm()">
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" class="form-control is-valid" id="name" name="name" required>
                  <span id="errorShortName" class="invalid-feedback">Die Eingabe ist zu kurz.</span>
                </div>

                <div class="form-group">
                  <label for="email">E-Mail:</label>
                  <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="form-group">
                  <label for="password">Passwort:</label>
                  <input type="password" class="form-control" id="password" name="password" required>
                  <span id="errorShortPassword" class="invalid-feedback">Die Eingabe ist zu kurz.</span>
                </div>

                <div class="form-group">
                  <label for="password_wdh">Wiederhole Passwort:</label>
                  <input type="password" class="form-control" id="password_wdh" name="password_wdh" required>
                  <span id="errorNotSamePW" class="invalid-feedback">Die Passwörter sind nicht gleich.</span>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Registrieren</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


    <script src="login/registersite.js"></script>
    <script src="login/login_conventions.js"></script>
  </body>
</html>
