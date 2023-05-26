<?php 
$lesproduits = [

[
    'nom'=> "Dog",
    'prix'=> 300,
    'image' => "https://cdn.pixabay.com/photo/2023/05/21/12/40/dog-8008483_1280.jpg",
    'stock' =>0
],

[


'nom' => "dog",
'prix' => 300,
'image' =>"https://cdn.pixabay.com/photo/2023/05/21/12/40/dog-8008483_1280.jpg",
'stock' =>0

],

[
'nom' => "chat",
'prix' => 300,
'image' => "https://cdn.pixabay.com/photo/2023/05/23/15/26/bengal-cat-8012976_1280.jpg",
'stock' =>0

]
];

echo '<pre>';
print_r($lesproduits);
echo '</pre>';
?>

</br>



<?php

$Try = [ "l", "p" , "m", "k", "z"];
sort($Try);
print_r ($Try);


print_r ($Try[0]);


print_r ($Try[4]);

while ($lesproduits[0]['stock']<10)
{ echo 'PLUS EN STOCK <br/>';
    $lesproduits[0]['stock']=$lesproduits[0]['stock']+1 ; 
;}

//break; pour sortir de la boucle même si la condition n'est pas remplie 

for ($nbligne=0; $nbligne<10; $nbligne++ ) {
    echo 'encore une ! <br/>';
}


$lettreAlphabet = ["a","b","c","d","e","f","g","h","i","j"];

for ($i =0;$i<count($lettreAlphabet); $i=$i+1)
{
    echo '-' .  $lettreAlphabet[$i] . "\n";
   
}


?>