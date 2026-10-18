<?php 


// $x : valide (que des lettres apres le $)
$x = 1;

//$_x = : valide (le underscore est autorisé en début de nom)
$_x = 2;

// $2x : invalide (on ne peut pas commencer un variable par un chiffre)
//  $x-y : invalide (le caractère special "-" n'est pas autorisé puisqu'il est un operateur de soustraction)

//  $Prix_HT : valide (les lettres et "_" sont autorisés)
$Prix_HT = 3;

//  $prix ht : invalide (les espaces ne sont pas autorisés)

//  $état : valide (que des lettres) 
$état = "et";

// en php les variables sont sensibles à la casse 
$a = "casse";
$A = "CASSE";

echo $a . "<br>";
echo $A . "<br>";

var_dump($a === $A);
?>

