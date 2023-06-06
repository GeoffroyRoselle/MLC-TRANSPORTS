<?php include './header.php'; ?>

      <!--Contenu de la page -->
      <main>
      <div class="container">
  <h1>Formulaire de contact</h1>
  <form action="sendEmail.php" method="post">
    <div class="form-group">
      <label for="nom">Nom</label>
      <input type="text" class="form-control" id="nom" name="nom">
    </div>
    <div class="form-group">
      <label for="prenom">Prénom</label>
      <input type="text" class="form-control" id="prenom" name="prenom">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="form-group">
      <label for="telephone">N° de téléphone</label>
      <input type="tel" class="form-control" id="telephone" name="telephone">
    </div>
    <div class="form-group">
      <label for="codePostal">Code Postal</label>
      <input type="text" class="form-control" id="codePostal" name="codePostal">
    </div>
    <div class="form-group">
      <label for="ville">Ville</label>
      <input type="text" class="form-control" id="ville" name="ville">
    </div>
    <div class="form-group">
      <label for="activite">Activité</label>
      <select class="form-control" id="activite" name="activite">
        <option>Convoyage de véhicules</option>
        <option>Transports</option>
        <option>Gestionnaire Transports</option>
        <option>Formation</option>
        <option>Jury professionnel</option>
        <option>Chaine youtube MLC-transports</option>
      </select>
    </div>
    <div class="form-group">
      <label for="demandeType">Type de demande</label>
      <select class="form-control" id="demandeType" name="demandeType">
        <option>Demande d'information</option>
        <option>Demande de devis</option>
      </select>
    </div>
    <div class="form-group">
      <label for="details">Détails</label>
      <textarea class="form-control" id="details" name="details"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
  </form>
</div>
    </main>
    <?php include './footer.php'; ?>