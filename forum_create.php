<?php 
require 'login/login_check.php';
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
    <h1>Themen erstellen</h1>
    <form method="POST" action="forum/forum_create_topic.php">
        <div class="form-group">
            <label for="kuerzel">Kürzel:</label>
            <input type="text" class="form-control" id="kuerzel" name="kuerzel" placeholder="Kürzel eingeben">
            <label for="topic">Thema:</label>
            <input type="text" class="form-control" id="topic" name="topic" placeholder="Thema eingeben">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Thema erstellen</button>
    </form>
</div>
</body>
</html>