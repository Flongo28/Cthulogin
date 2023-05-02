<!DOCTYPE html>
<html>
<head>
	<title>Server-Informationen</title>

    <?php include 'verwaltung/links.php'; echo Links::get_all_html_docs(); ?>
</head>
<body>
    <button type="button" id="send-button" class="btn btn-primary mb-3">Confirm identity</button>
    <textarea class="form-control" id="message" rows="3"></textarea>

    <script src="/socket.io/socket.io.js"></script>
    <script>
    // Verbindung zum Socket.io-Server herstellen
    const socket = io('http://141.72.189.9:3000');
    socket.emit('message', 'Hallo Server!'); // Nachricht an den Server senden

    // // Event-Handler für den Empfang von Nachrichten
    // socket.on('message', (data) => {
    //     console.log('Received message:', data);

    //     // Code zum Hinzufügen der Nachricht zum Chat-Bereich
    // });

    // // Event-Handler für das Absenden von Nachrichten
    // $('#send-button').on('click', function(event) {
    //     event.preventDefault();
    //     var message = $('#message').val();
    //     socket.emit('message', message);
    // });
    </script>
</body>
</html>