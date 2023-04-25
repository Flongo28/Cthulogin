<header>
      <img src="img/logo2.png" alt="Logo" id="logo">
      <div class="header">Cthulogin</div>
      <nav>
        <ul class="nav-menu">
            <?php
                // Start a session if it hasn't been started already
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }

                // Überprüfen, ob eine aktive Session vorhanden ist
                if (isset($_SESSION['name'])) {
                    echo <<<EOT
                        <li><a href="navigator.php">Browser</a></li>
                        <li><a href="forum.php">Forum</a></li>
                        <li><a href="login/logout.php">Logout</a></li>
                    EOT;
                } else {
                    echo <<<EOT
                        <li><a href="register.php">Registration</a></li>
                        <li><a href="login.php">Login</a></li>
                    EOT;
                } ?>
        </ul>
    </nav>
</header>
