<header class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="img/logo2.png" alt="Logo" id="logo">
            Cthulogin
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <?php
                    // Start a session if it hasn't been started already
                    if (session_status() == PHP_SESSION_NONE) {
                        session_start();
                    }

                    // Überprüfen, ob eine aktive Session vorhanden ist
                    if (isset($_SESSION['name'])) {
                        echo <<<EOT
                            <li class="nav-item"><a class="nav-link" href="navigator.php">Browser</a></li>
                            <li class="nav-item"><a class="nav-link" href="forum.php">Forum</a></li>
                            <li class="nav-item"><a class="nav-link" href="login/logout.php">Logout</a></li>
                        EOT;
                    } else {
                        echo <<<EOT
                            <li class="nav-item"><a class="nav-link" href="register.php">Registration</a></li>
                            <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                        EOT;
                    } ?>
            </ul>
        </div>
    </div>
</header>
