<?php


/*formatPrice ($prixcentimes)
{
    
}
*/





function formatPrice($prixEnCentimes) {
    $prixEnEuros = number_format($prixEnCentimes / 100, 2, ',', '.');
    echo $prixEnEuros . '€' . "<br>";

}


// Pour l'afficher =>      formatPrice (1000);

/*function calculerTVA($montantHT, $tauxTVA) {
    $montantTTC = $montantHT + ($montantHT * ($tauxTVA / 100));
    return $montantTTC;
}
*/

?>