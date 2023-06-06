<?php
session_start();
require_once 'db_config.php';
// Vérification de la connexion
if ($connexion->connect_error) {
    die("Erreur de connexion à la base de données : " . $connexion->connect_error);
}

// Récupération des données du formulaire
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$parc = $_POST['parc'];
$date = $_POST['date'];
$duree_conduite = $_POST['duree_conduite'];
$duree_commentaire = $_POST['duree_commentaire'];
$conditions = $_POST['conditions'];
$type_conduite = $_POST['type_conduite'];

// Requête SQL pour insérer les données dans la base de données
$sql = "INSERT INTO conduite (prenom, nom, parc, date, duree_conduite, duree_commentaire, conditions, type_conduite)
VALUES ('$prenom', '$nom', '$parc', '$date', '$duree_conduite', '$duree_commentaire', '$conditions', '$type_conduite')";

if ($connexion->query($sql) === TRUE) {
echo "Données enregistrées avec succès.";
} else {
echo "Erreur lors de l'enregistrement des données : " . $connexion->error;
}

// Fermeture de la connexion à la base de données
$connexion->close();
?>