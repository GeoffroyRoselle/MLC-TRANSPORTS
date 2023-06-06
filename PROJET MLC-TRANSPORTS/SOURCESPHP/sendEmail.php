<?php include './header.php'; ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $codePostal = $_POST['codePostal'];
    $ville = $_POST['ville'];
    $activite = $_POST['activite'];
    $demandeType = $_POST['demandeType'];
    $details = $_POST['details'];

    // Vos validations de formulaire peuvent être mises ici
    // Par exemple, vérifier si les champs sont vides, etc.

    $to = "geoffroy.roselle@mlc-transports.fr"; // Remplacez par votre e-mail
    $subject = "Nouvelle demande de $demandeType de $nom $prenom";

    $message = "Nom: $nom\n".
               "Prénom: $prenom\n".
               "Email: $email\n".
               "N° de téléphone: $telephone\n".
               "Code Postal: $codePostal\n".
               "Ville: $ville\n".
               "Activité: $activite\n".
               "Type de demande: $demandeType\n".
               "Détails:\n\n$details";

    $headers = "From: Geoffroy.roselle@mlc-transports.fr"; // Remplacez par votre e-mail
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // En PHP, vous pouvez utiliser la fonction mail() pour envoyer un e-mail
    $sent = mail($to, $subject, $message, $headers);

    if ($sent) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Désolé, votre message n'a pas pu être envoyé.";
    }
}
?>
<?php include './footer.php'; ?>
