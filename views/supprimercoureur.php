<?php
include "../views/layout/header.php";
include '../bdd/crud.php';
?>

<h2 class="text-center">
    Lycée des métiers Tarbes
</h2>


<?php
$result = delete('coureurs','idcoureur',$_GET['idcoureur']);

if ($result == true)
    echo "supprimé";
else
    echo "erreur";
?>
<?php
include "../views/layout/footer.php";
?>
