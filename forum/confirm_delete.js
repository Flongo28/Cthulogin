$(document).ready(function() {
    $('#delete_forum_button').click(function() {
      if (confirm("Sind Sie sicher, dass Sie das Element löschen möchten?")) {
        var forumKuerzel = document.getElementById("forum_kuerzel").value;

        var url = "forum/forum_delete_topic.php";
        url += "?forum_kuerzel=" + encodeURIComponent(forumKuerzel);

        window.open(url);
      } else {
        alert("Löschen abgebrochen");
      }
    });
});
  