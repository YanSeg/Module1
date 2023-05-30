<?php

include  "template/header.php";
include  "my-functions.php";



$Chien =
    [
        'nom' => "Dog",
        'prixTTC' => 30000,
        'weight' => 3000,
        'remise' => 300,
        'image' => "http://localhost/Module1/image/dog.png",
    ];

$Coccinelle =
    [
        'nom' => "cocinelle",
        'prixTTC' => 3000,
        'weight' => 3,
        'remise' => 30,
        'image' => "http://localhost/Module1/image/coci.png",

    ];
$Cat =
    [
        'nom' => "chat",
        'prixTTC' => 30000,
        'weight' => 1000,
        'remise' => 300,
        'image' => "http://localhost/Module1/image/cat.png",

    ];







foreach (array($Chien, $Coccinelle, $Cat) as $table) :  ?>
        <div>
            <h3><?php echo $table['nom'] ?></h3>
            <p>Prix initiale HT: <?php echo formatPrice(priceExcludingVAT($table['prixTTC'])) ?> </p>
            <p>Prix initiale TTC: <?php echo formatPrice($table['prixTTC']) ?><p/>
            <p>Prix Final après remise : <?php echo  formatPrice(discountedPrice($table['prixTTC'], $table['remise'])) ?> </p>
            <img src="<?php echo $table['image'] ?>">
        </div>
<?php endforeach;
?>














<!--<div>
    <h3><?php echo $Chien['nom'] ?></h3>
    <p>Prix TTC : <?php echo formatPrice($Chien['prix']) ?></p>
    <p>Prix HT : <?php echo formatPrice(priceExcludingVAT($Chien['prix'])) ?> </p>
    <p>Remise : <?php echo formatPrice(discountedPrice($Chien['prix'], $Chien['remise'])) ?> </p>
    <img src="<?php echo $Chien['image'] ?>">
</div>

<div>
    <h3><?php echo $Coccinelle['nom'] ?></h3>
    <p>Prix : <?php echo formatPrice($Coccinelle['prix']) ?></p>
    <img src="<?php echo $Coccinelle['image'] ?>">
</div>

<div>
    <h3><?php echo $Cat['nom'] ?></h3>
    <p>Prix : <?php echo formatPrice($Cat['prix']) ?></p>
    <img src="<?php echo $Cat['image'] ?>">
</div>





<?php
include  "template/footer.php";
?>