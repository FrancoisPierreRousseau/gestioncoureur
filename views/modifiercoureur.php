<?php
include '../bdd/crud.php';
include '../views/layout/header.php';


$resultat = get('coureurs', 'idcoureur', $_GET['idcoureur']);

if (isset($_POST['submit'])) {
    $_POST['cp'] = intval($_POST['cp']);
    update('coureurs', $_GET['idcoureur'], 'idcoureur', $_POST);
    header('Location:affichagecoureur.php');
}
?>

<h2 class="text-center">
    Lycée des métiers Tarbes
</h2>

<div class="container">
    <form method="post" class="row g-3">
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input name="nom" class="form-control" id="nom" type="text" placeholder=<?= $resultat[0]['nom'] ?>>
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom</label>
            <input name="prenom" class="form-control" id="prenom" type="text" placeholder=<?= $resultat[0]['prenom'] ?>>
        </div>
        <div class="mb-3">
            <label for="sexe" class="form-label">Sexe</label>
            <select name="sexe" class="form-control" id="sexe">
                <option value="H" <?php if ($resultat[0]['sexe'] == 'H') {
                    echo "selected";
                } ?> >H
                </option>
                <option value="F" <?php if ($resultat[0]['sexe'] == 'F') {
                    echo "selected";
                } ?> >F
                </option>
            </select>
        </div>
        <div class="mb-3">
            <label for="adresse" class="form-label">Adresse</label>
            <input name="adresse" class="form-control" id="adresse" type="text"
                   placeholder=<?= $resultat[0]['adresse'] ?>>
        </div>
        <div class="mb-3">
            <label for="cp" class="form-label">CP</label>
            <input name="cp" class="form-control" id="cp" type="text" placeholder=<?= $resultat[0]['cp'] ?>>
        </div>
        <div class="mb-3">
            <label for="ville" class="form-label">Ville</label>
            <input name="ville" class="form-control" id="ville" type="text" placeholder=<?= $resultat[0]['ville'] ?>>
        </div>
        <div class="mb-3">
            <label for="datenais" class="form-label">Date de naissance</label>
            <input name="datenais" class="form-control" id="datenais" type="date">
        </div>
        <div class="mb-3">
            <input name="submit" type="submit" value="valider" class="btn btn-primary mb-3">
        </div>
    </form>
</div>


<?php
include '../views/layout/footer.php';
?>
