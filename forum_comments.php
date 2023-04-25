<?php
    
?>

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
    <div class="container mt-5">
		<div class="row">
			<div class="col-12">
				<h1>Nachrichten</h1>
				<div class="chat border p-3">
					<?php
						include 'forum/forum_get_messages.php';
					?>
				</div>

				<form>
					<div class="form-group mt-3">
						<label for="message">Nachricht:</label>
						<textarea class="form-control" id="message" rows="3"></textarea>
					</div>
					<input type="hidden" name="forum_kuerzel" value=<?$_POST['forum_kuerzel']?>>
					<button type="submit" class="btn btn-primary">Veröffentlichen</button>
				</form>
			</div>
		</div>
	</div>
	</div>
</body>
</html>