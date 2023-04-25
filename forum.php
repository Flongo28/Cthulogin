<?php require 'login/login_check.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Themen erstellen/löschen</title>

    <!-- Einbindung von Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    
    <!-- Css -->
    <link rel="stylesheet" href="styles/style.css">
</head>
<body> 
<?php 
      include 'header.php';
?>

<div class="container">
    <h1>Themen öffnen</h1>
    <form method="POST" action="forum/forum_comments.php">
        <div class="form-group">
            <label for="delete">Forum öffnen:</label>
            <select class="form-control" id="kuerzel_delete" name="kuerzel_delete">
                <?php require 'forum/forum_get_topics.php'; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Forum öffnen</button>
    </form>

    <hr>

    <h1>Themen erstellen</h1>
    <form method="POST" action="forum/forum_create_topic.php">
        <div class="form-group">
            <label for="kuerzel">Kürzel:</label>
            <input type="text" class="form-control" id="kuerzel" name="kuerzel" placeholder="Kürzel eingeben">
            <label for="topic">Thema:</label>
            <input type="text" class="form-control" id="topic" name="topic" placeholder="Thema eingeben">
        </div>
        <button type="submit" class="btn btn-primary">Thema erstellen</button>
    </form>
</div>
</body>
</html>