<?php 
	require_once('verwaltung/links.php');

	if (!isset($_GET['forum_kuerzel'])){
		header('Location:' . Links::FORUM);
		return;
	}

	require 'login/login_check.php'; 
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
		<!-- Delete Button -->
		<div class="d-flex justify-content-end">
			<button type="button" class="btn btn-outline-danger" id='delete_forum_button'>
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
					<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"></path>
					<path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"></path>
				</svg>
				Delete Chat
			</button>
		</div>

		<div class="row">
			<div class="col-12">
				<h1>Chat <?php echo $_GET["forum_kuerzel"]; ?>:</h1>
				<!-- <a href="#" class="bi bi-trash" data-toggle="modal" data-target="#deleteModal"><i class="bi bi-trash"></i></a> -->

				<input type="hidden" id="forum_kuerzel" value= <?php echo '"' . $_GET["forum_kuerzel"] . '"'; ?>>
				<div class="chat border p-3">
					<?php
						include 'forum/forum_get_messages.php';
						echo get_all_messages($_GET['forum_kuerzel']);
					?>
				</div>

				<form method="POST" action="forum/forum_send_message.php">
					<div class="form-group mt-3">
						<label for="message">Nachrichten:</label>
						<textarea class="form-control" id="message" name='message' rows="3"></textarea>
					</div>
					<input type="hidden" name="forum_kuerzel" value= <?php echo '"' . $_GET["forum_kuerzel"] . '"'; ?>>
					<button type="submit" class="btn btn-primary">Veröffentlichen</button>
				</form>
			</div>
		</div>
	</div>
	</div>

	<!-- jQuery CDN -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="forum/confirm_delete.js"></script>
</body>
</html>