<?php
$nom_produit = "T-shirt simple ";
$couleur = "Blanc ";
$prix = 10.50;
$disponible = true;
$quantite = 10;
$var1 = 10;
$var2= 3; 


echo "<h3>" .$nom_produit. "</h3>";
echo "<p>Le nom du produit est " .$nom_produit."</p>";
echo "<p>Il reste " .$quantite. "</p>";
echo "<p>Le produit est " .$couleur. "</p>";

echo "<h4>" . $nom_produit . "</p>";
echo "<p>Acheter 3 produits coûterait " . $prix * 3 . "</p>";
echo "<p>Acheter la totalité des produits coûterait " . $prix * 10 . "</p>";
echo "<p>Si trois produits sont vendus alors il reste " . $quantite * 0,7 . " produits en stocks </p>";


if ($disponible) {
    echo "<p>Le produit " .$nom_produit . "est disponible à la vente </p>";
}
if ($disponible == false) {
    echo "<p>Le produit " .$nom_produit . "n'est malheureusement plus disponible </p>";
}

if ($quantite > 5) {
    echo "<p>Il reste " .$quantite . " produits en magasin </p>";
}

if ($quantite < 5) {
    echo "<p>Il ne reste plus que " .$quantite . "produits en magasin </p>";
}

if ($quantite == 1) {
    echo "<p>Il ne reste qu' " .$quantite . " produit en magasin </p>";
}

if ($quantite == 0) {
    echo "<p>Il ne reste plus de " .$quantite . "produit en magasin </p>";
}
?>