<?php include 'header.php'; ?>
<main>
    <?php
    session_start();
    // Inclure le fichier de configuration de la base de données
    include 'db_config.php';
    $formateur_id = $_SESSION['formateurs_id'];


    // Préparer la requête SQL
    $sql = "
    SELECT e.nom AS eleve_nom, e.prenom AS eleve_prenom, f.nom AS formateur_nom, ex.* 
    FROM iesm ex 
    LEFT JOIN eleves e ON ex.eleves_id = e.id 
    LEFT JOIN formateurs f ON ex.formateurs_id = f.id
    WHERE ex.formateurs_id = ?";

    // Préparez la déclaration pour l'exécution
    if ($stmt = $conn->prepare($sql)) {

        // Liaison des paramètres
        $stmt->bind_param("i", $_SESSION['formateurs_id']);

        // Exécution de la requête
        $stmt->execute();

        // Lier les variables de résultats
        $stmt->bind_result($eleve_nom, $eleve_prenom, $formateur_nom, $id, $eleves_id, $formateurs_id, $date_examen, $note, $reussite_manoeuvre, $duree_manoeuvre);
        // Page de présentation des résultats
        echo '<div class="container">';
        echo '<h1 class="mb-4">Résultats des Examens IESM permis C</h1>';
        echo '<p> Consultez cette page pour voir les résultats des examens de vos élèves.</p>';
        echo '</div>';

        // Affichez les résultats sous forme de tableau HTML
        echo '<div class="resultiesm">';
        echo '<table id="myTable" class="table table-striped">';
        echo '<thead class="thead-dark"><tr><th>ID</th><th>Nom de l\'Élève</th><th>Prénom de l\'Élève</th><th>Nom du Formateur</th><th>Date de l\'Examen</th><th>Note</th><th>Réussite de la Manœuvre</th><th>Durée de la Manœuvre</th></tr></thead>';

        // Parcourir les résultats
        while ($stmt->fetch()) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($id) . '</td>';
            echo '<td>' . htmlspecialchars($eleve_nom) . '</td>';
            echo '<td>' . htmlspecialchars($eleve_prenom) . '</td>';
            echo '<td>' . htmlspecialchars($formateur_nom) . '</td>';

            // Formatage de la date
            $formatted_date = date('d-m-Y', strtotime($date_examen));
            echo '<td>' . htmlspecialchars($formatted_date) . '</td>';

            echo '<td>' . htmlspecialchars($note) . '</td>';
            echo '<td>' . htmlspecialchars($reussite_manoeuvre) . '</td>';
            echo '<td>' . htmlspecialchars($duree_manoeuvre) . '</td>';
            echo '</tr>';
        }

        echo '</table>';
        echo '</div>';

        // Fermer la déclaration
        $stmt->close();
    }
    ?>

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    <!-- CSS pour DataTables Responsive -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">

    <!-- jQuery library -->
    <script src="./jquery-3.7.0.min.js"></script>

    <!-- DataTables JavaScript -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <!-- JavaScript pour DataTables Responsive -->
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>


    <script>
        let table = new DataTable('#myTable');
        $(document).ready(function() {
            $('#myTable').DataTable({
                responsive: true
            });
        });
    </script>


</main>
<?php include 'footer.php'; ?>