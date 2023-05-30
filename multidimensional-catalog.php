<?php

include  "template/header.php";
include  "my-functions.php"; 



$lesproduits = [

    [
        'nom' => "Dog",
        'prix' => 30000,
        'weight' => 3000,
        'Remise' => 0,
        'image' => "http://localhost/Module1/image/dog.png"
    ],

    [


        'nom' => "cocinelle",
        'prix' => 3000,
        'weight' => 3,
        'Remise' => 0,
        'image' => "http://localhost/Module1/image/coci.png"

    ],

    [
        'nom' => "chat",
        'prix' => 30000,
        'weight' => 1000,
        'Remise' => 0,
        'image' => "http://localhost/Module1/image/cat.png"

    ]
];

?>


<div>
    <h3><?php echo $lesproduits[0]['nom'] ?></h3>
    <p>Prix : <?php echo formatPrice ($lesproduits [0]['prix']) ?></p>
    <img src="<?php echo $lesproduits[0]['image'] ?>">
</div>

<div>
    <h3><?php echo $lesproduits[1]['nom'] ?></h3>
    <p>Prix : <?php echo formatPrice ($lesproduits [1]['prix']) ?></p>
    <img src="<?php echo $lesproduits[1]['image'] ?>">
</div>

<div>
    <h3><?php echo $lesproduits[2]['nom']?></h3>
    <p>Prix : <?php echo formatPrice ($lesproduits [2]['prix']) ?></p>
    <img src="<?php echo $lesproduits[2]['image'] ?>">
</div>





    <?php
    include  "template/footer.php";
    ?>