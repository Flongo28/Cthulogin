<!DOCTYPE html>
<html>
<head>
	<title>Server-Informationen</title>

    <?php include 'verwaltung/links.php'; echo Links::get_all_html_docs(); ?>
</head>
<body>
	<h1>Server-Informationen</h1>
	<?php
    echo apache_get_version(); 
    phpinfo(); 
    ?>
</body>
</html>
