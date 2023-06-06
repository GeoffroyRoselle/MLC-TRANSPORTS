<?php include './SOURCESPHP/header.php'; ?>
<main>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Enregistrement d'une formation</h1>
                <p>Pour commencer, enregistrez votre formation</p>
                <div class="container">
                    <form>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <select class="form-control" id="type" name="type">
                                <option value="">Selectionner</option>
                                <option value="TP CTRMP">TP CTRMP</option>
                                <option value="TP CTCR">TP CTCR</option>
                                <option value="TP CTRMTV">TP CTRMTV</option>
                                <option value="TP CTRVU...">TP CTRVU</option>
                                <!-- Other options... -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="date_debut">Date de début</label>
                            <input type="date" class="form-control" id="date_debut" name="date_debut">
                        </div>
                        <div class="form-group">
                            <label for="date_debut">Date de fin</label>
                            <input type="date" class="form-control" id="date_fin" name="date_fin">
                        </div>
                        <!-- Add similar divs for other date fields -->
                        <div class="form-group">
                            <label for="nombre_eleves_inscrits">Nombre d'élèves inscrits</label>
                            <input type="number" class="form-control" id="nombre_eleves_inscrits" name="nombre_eleves_inscrits">
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="formateur_referent_id" name="formateur_referent_id">
                                <label class="form-check-label" for="formateur_referent_id">Êtes vous le Formateur Référent?</label>
                            </div>

                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</main>
<?php include './SOURCESPHP/footer.php'; ?>