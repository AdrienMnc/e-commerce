<?php
require __DIR__ . "/Product.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $monProduit = new Product($_POST["prixHt"], $_POST["tva"], $_POST["nom"], $_POST["categorie"], $_POST["stock"], $_POST["description"]);
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commerce en ligne</title>
</head>

<body>
    <h1>SHOP ONLINE</h1>

    <form action="index.php" method="POST">

        <input type="number" name="prixHt" placeholder="Prix d'achat">
        <input type="number" name="tva" placeholder="TVA">
        <input type="text" name="nom" placeholder="Nom du produit">
        <input type="text" name="categorie" placeholder="Categorie">
        <input type="number" name="stock" placeholder="Stock">
        <input type="text" name="description" placeholder="description">

        <button>Envoyer</button>


    </form>

    <?php if (isset($monProduit)) { ?>

        <ul>
            <li> <?php echo "prixHt:" . " " . $monProduit->getPrice(); ?> </li>
            <li> <?php echo "valorisation du stock:" . " " . $monProduit->calculerValorisationStock(); ?> </li>
            <li> <?php echo "tva:" . " " . $monProduit->tva; ?> </li>
            <li> <?php echo "prixTTC:" . " " . $monProduit->prixTTC; ?> </li>
            <li> <?php echo "nom:" . " " . $monProduit->nom; ?> </li>
            <li> <?php echo "categorie:" . " " . $monProduit->categorie; ?> </li>
            <li> <?php echo "stock:" . " " . $monProduit->stock; ?> </li>
            <li> <?php echo "description:" . " " . $monProduit->description; ?> </li>
        </ul>
    <?php } ?>

</body>

</html>