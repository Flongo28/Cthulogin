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

    <div class="container d-flex justify-content-center align-items-center vh-100">
      <div class="card p-4">
        <h2 class="card-title text-center mb-4">Login</h2>
        <form method="POST" action="login/login.php">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>

          <div class="form-group">
            <label for="password">Passwort:</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>

          <button type="submit" class="btn btn-primary btn-block mt-4">Login</button>
        </form>
      </div>
    </div>
  </body>
</html>