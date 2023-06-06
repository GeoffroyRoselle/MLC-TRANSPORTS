// ecoute du formulaire
$(document).ready(function () {
  $("#conduiteForm").submit(function (e) {
    e.preventDefault(); // Empêche la soumission du formulaire par défaut

    $.ajax({
      type: "POST",
      url: "./process_save_drive.php",
      data: $(this).serialize(),
      success: function (response) {
        alert(response); // Affiche la réponse du serveur
      },
    });
  });
});
