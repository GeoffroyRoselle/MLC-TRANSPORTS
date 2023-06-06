<?php
session_start();
require_once 'db_config.php';

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];

$sql = "SELECT * FROM eleves WHERE nom LIKE ? AND prenom LIKE ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $nom, $prenom);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>ID: " . $row['id'] . ", Nom : " . $row['nom'] . ", Prénom : " . $row['prenom'] . "</li>";

        // Stocker l'ID de l'élève dans une variable de session
        $_SESSION['eleve_id'] = $row['id'];
    }
    echo "</ul>";
} else {
    echo "Aucun élève trouvé.";
}

$stmt->close();
$conn->close();
