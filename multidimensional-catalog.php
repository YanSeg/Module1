<?php

include  "template/header.php";
include  "my-functions.php";



$lesproduits = [

    [
        'nom' => "Dog",
        'prixTTC' => 30000,
        'weight' => 3000,
        'Remise' => 300,
        'image' => "http://localhost/Module1/image/dog.png"
    ],

    [


        'nom' => "cocinelle",
        'prixTTC' => 3000,
        'weight' => 3,
        'Remise' => 30,
        'image' => "http://localhost/Module1/image/coci.png"

    ],

    [
        'nom' => "chat",
        'prixTTC' => 30000,
        'weight' => 1000,
        'Remise' => 300,
        'image' => "http://localhost/Module1/image/cat.png"

    ]
];




foreach ($lesproduits as $produit) : ?>
    <div>
        <h3><?php echo $produit['nom'] ?></h3>
        <p> Prix initiale HT: <?php echo formatPrice(priceExcludingVAT($produit['prixTTC'])) ?> </p>
        <p>Prix initiale TTC : <?php echo formatPrice($produit['prixTTC']) ?></p>
        <p>Prix Final après remise : <?php echo  formatPrice(discountedPrice($table['prixTTC'], $table['remise'])) ?> </p>
        <img src="<?php echo $produit['image'] ?>">
    </div>
<?php endforeach;

?>


<h1> Là même chose sans passer par une boucle foraech !!! C'est plus long et impossible à faire quant on a moulet produits!!!! </h1>

<div>
    <h3><?php echo $produit['nom'] ?></h3>
    <p>Prix : <?php echo formatPrice($produit['prixTTC']) ?></p>
    <img src="<?php echo $produit['image'] ?>">
</div>




<div>
    <h3><?php echo $lesproduits[0]['nom'] ?></h3>
    <p>Prix TTC : <?php echo formatPrice($lesproduits[0]['prixTTC']) ?></p>
    <img src="<?php echo $lesproduits[0]['image'] ?>">
</div>

<div>
    <h3><?php echo $lesproduits[1]['nom'] ?></h3>
    <p>Prix : <?php echo formatPrice($lesproduits[1]['prix']) ?></p>
    <img src="<?php echo $lesproduits[1]['image'] ?>">
</div>

<div>
    <h3><?php echo $lesproduits[2]['nom'] ?></h3>
    <p>Prix : <?php echo formatPrice($lesproduits[2]['prixTTC']) ?></p>
    <img src="<?php echo $lesproduits[2]['image'] ?>">
</div>






<?php
include  "template/footer.php";
?>