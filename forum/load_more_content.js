$(document).ready(function(){
    var topic = document.getElementById("forum_kuerzel").value;
    var start = 10; // Startindex zum Lesen von Nachrichten (z.B. die ersten 10 Nachrichten werden übersprungen)
    var limit = 10; // Maximale Anzahl von Nachrichten, die auf einmal geladen werden sollen
    console.log("Ready");

    // Handler für "Weitere Nachrichten laden" Button
    $('#load-more-button').click(function(){
        $.ajax({
            type: "POST",
            url: "forum/load_more_content.php",
            data: { topic: topic, start: start, limit: limit },
            
            success: function(data){
                // Füge die geladenen Nachrichten in das Nachrichtencontainer hinzu
                $('#message-container').append(data);
                console.log("Added Content");

                // Erhöhe den Startindex für die nächste Anfrage
                start += limit;
            },
            error: function(xhr, status, error){
                // Fehlerbehandlung
                console.log("Fehler beim Laden von Nachrichten: " + error);
            }
        });
    });
});
