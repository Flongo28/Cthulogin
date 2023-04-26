<?php 
require 'login/login_check.php'; 
require_once('verwaltung/links.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Themen erstellen/löschen</title>

    <?php echo Links::get_all_html_docs(); ?>
</head>
<body> 
<?php 
      include 'header.php';
?>

<div class="container">
    <h1>Themen öffnen</h1>
    <form method="GET" action="forum_comments.php">
        <div class="form-group">
            <label for="delete">Forum öffnen:</label>
            <select class="form-control" id="forum_kuerzel" name="forum_kuerzel">
                <?php require 'forum/forum_get_topics.php'; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Forum öffnen</button>
    </form>

    <!-- Erstellungseite öffnen -->
    <div class="d-flex justify-content-end">
        <a href="forum_create.php">
            <button type="button" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"></path>
                </svg>
                Button
            </button>
        </a>
    </div>
</div>
</body>
</html>