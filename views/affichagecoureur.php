<?php
include '../views/layout/header.php';
include '../bdd/crud.php';
$resultat = getAll('coureurs');
?>

    <div class="container mt-5">
        <?php if (!empty($resultat)): ?>
            <table class="table">
                <tbody>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Sexe</th>
                    <th>Adresse</th>
                    <th>Code postal</th>
                    <th>Ville</th>
                    <th>Date de naissance</th>
                    <th>Supprimer</th>
                    <th>Modifier</th>
                </tr>
                <?php foreach ($resultat as $result): ?>
                    <tr>
                        <td><?= $result["idcoureur"] ?></td>
                        <td><?= $result["nom"] ?></td>
                        <td><?= $result["prenom"] ?></td>
                        <td><?= $result["sexe"] ?></td>
                        <td><?= $result["adresse"] ?></td>
                        <td><?= $result["cp"] ?></td>
                        <td><?= $result["ville"] ?></td>
                        <td> <?= $result["datenais"] ?></td>
                        <td><a class="btn btn-primary"
                               href="supprimercoureur.php?idcoureur=<?= $result["idcoureur"]; ?>  ">supprimer</a></td>
                        <td><a class="btn btn-danger" href="modifiercoureur.php?idcoureur=<?= $result["idcoureur"]; ?>">Modifier</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Pas de resultat dans la base de donnees</p>
        <?php endif; ?>
    </div>
<?php
include '../views/layout/footer.php'
?>