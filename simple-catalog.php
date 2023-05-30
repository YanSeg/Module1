
<?php

include  "template/header.php";

$products = ["Chien", "Coccinelle", "Cat"];


sort($products)  ."<br>";
print_r($products) . "<br>";
?>

<br>
<br>

<?php
foreach ($products as $ligne){
    echo $ligne . "  ";

}

?>

<br>
<br>


<?php

echo $products[0] . "<br>";

echo $products[count($products) -1]. "<br>";

include  "template/footer.php";

?>