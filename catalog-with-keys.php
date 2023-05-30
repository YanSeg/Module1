<?php

include  "template/header.php";
include  "my-functions.php";



$Chien =
    [
        'nom' => "Dog",
        'prix' => 30000,
        'weight' => 3000,
        'Remise' => 0,
        'image' => "http://localhost/Module1/image/dog.png",
    ];

$Coccinelle =
    [
        'nom' => "cocinelle",
        'prix' => 3000,
        'weight' => 3,
        'Remise' => 0,
        'image' => "http://localhost/Module1/image/coci.png",

    ];
$Cat =
    [
        'nom' => "chat",
        'prix' => 30000,
        'weight' => 1000,
        'Remise' => 0,
        'image' => "http://localhost/Module1/image/cat.png",

    ];

?>


<div>
    <h3><?php echo $Chien['nom'] ?></h3>
    <p>Prix : <?php echo formatPrice ($Chien['prix'])?></p>
    <img src="<?php echo $Chien['image'] ?>">
</div>

<div>
    <h3><?php echo $Coccinelle['nom'] ?></h3>
    <p>Prix : <?php echo formatPrice ($Coccinelle ['prix']) ?></p>
    <img src="<?php echo $Coccinelle['image'] ?>">
</div>

<div>
    <h3><?php echo $Cat['nom'] ?></h3>
    <p>Prix : <?php echo formatPrice ($Cat['prix']) ?></p>
    <img src="<?php echo $Cat['image'] ?>">
</div>





<?php
include  "template/footer.php";
?>