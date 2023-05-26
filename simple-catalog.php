<?php 


$lesproduits = [
[
    'nom'=> "Dog",
    'prix'=> 300,
    'image' => "https://cdn.pixabay.com/photo/2023/05/21/12/40/dog-8008483_1280.jpg"
],

[


'nom' => "dog",
'prix' => 300,
'image' =>"https://cdn.pixabay.com/photo/2023/05/21/12/40/dog-8008483_1280.jpg"

],

[
'nom' => "chat",
'prix' => 300,
'image' => "https://cdn.pixabay.com/photo/2023/05/23/15/26/bengal-cat-8012976_1280.jpg"

]
];

echo '<pre>';
print_r ($lesproduits);
echo '</pre>';
?>

</br>

<?php

$Try = [ "l", "p" , "m", "k", "z"];
sort($Try);
print_r ($Try);


print_r ($Try[0]);


print_r ($Try[4]);
?>