const http = require('http');
const socketIo = require('socket.io');

// Erstellen Sie einen HTTP-Server
const server = http.createServer((req, res) => {
  res.writeHead(200, { 'Content-Type': 'text/plain' });
  res.end('Hello World\n');
});

// Starten Sie den Server auf Port 3000
server.listen(3000, () => {
  console.log('Server running on http://141.72.189.9:3000');
});

// Erstellen Sie eine Socket.io-Instanz
const io = socketIo(server);

// Event-Handler für den Verbindungsaufbau
io.on('connection', (socket) => {
  console.log('Client connected:', socket.id);

  // Event-Handler für den Empfang von Nachrichten
  socket.on('message', (data) => {
    console.log('Received message:', data);

    // Broadcasten der Nachricht an alle Clients
    io.emit('message', data);
  });

  // Event-Handler für das Schließen der Verbindung
  socket.on('disconnect', () => {
    console.log('Client disconnected:', socket.id);
  });
});
