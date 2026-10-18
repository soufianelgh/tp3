<?php 

// Nom : Laghmam
// Prenom : Soufiane 
// Date : 18/10/2026

require 'config.php';

echo "<h2>Partie 1 : Variables, constantes, types et chaines</h2>";

echo "<h3>Exercice 1.1 : Noms de variables</h3>";

// $x : valide (que des lettres apres le $)
$x = 1;

//$_x = : valide (le underscore est autorisé en début de nom)
$_x = 2;

// $2x : invalide (on ne peut pas commencer un variable par un chiffre)
//  $x-y : invalide (le caractère special "-" n'est pas autorisé puisqu'il est un operateur de soustraction)

//  $Prix_HT : valide (les lettres et "_" sont autorisés)
$Prix_HT = 3;

//  $prix ht : invalide (les espaces ne sont pas autorisés)

//  $état : valide (que des lettres et les accenets sont autorisés) 

$état = "et";

// en php les variables sont sensibles à la casse 
$a = "casse";
$A = "CASSE";

echo $a . "<br>";
echo $A . "<br>";

var_dump($a === $A);


echo "<h3>Exercice 1.2 : Constantes</h3>";
echo ETABLISSEMENT . "<br>";
echo NOTE_MIN . "<br>";
echo NOTE_MAX . "<br>";
echo SEUIL . "<br>";

var_dump(defined('SEUIL'));
echo "<br>";
var_dump(defined('INCONNUE'));
echo "<br>";

/* 
questions :
question 1 : pour php 8+ erreur fatale "undefined constant", et le script s'arrete. Pour php 7 "warning" simple et la constante est traitée comme chaine de caractere "INCONNUE". 
question 2 : 'const' est résolue à la compilation : elle doit etre au niveau global. Son nom doit etre ecrit litteralement.alors que 'define()' s'execute à l'execution : elle peut etre appelée dans une condition ou une fonction, et son nom peut etre calculé .
*/

echo "<h3>Exercice 1.3 : Calcul</h3>";

$prix_ht = 60;
$tva = 20;

$prix_ttc = $prix_ht + ($prix_ht * $tva / 100);

echo "Le prix TTC du produit est $prix_ttc € . <br>";


echo "<h3>Exercice 1.4 : Types et conversions</h3>";

$test = 42;
$test = (string) $test;
var_dump($test);
echo "<br>";

/* Predictions :
 0 : false, 0.0 : false, "0" : true , "" : true, "abc" : true, [] : false, null :true .
*/

var_dump((bool) 0); echo "<br>";
var_dump((bool) 0.0); echo "<br>";
var_dump((bool) "0"); echo "<br>";
var_dump((bool) ""); echo "<br>";
var_dump((bool) "abc"); echo "<br>";
var_dump((bool) []); echo "<br>";
var_dump((bool) null); echo "<br>";

// Predictions : (int) 3.9 : 3, (int) "12abc" : error, (float) "1.5e3" : error, (int) true : 1.
echo "<br>"; 

var_dump((int) 3.9); echo "<br>";
var_dump((int) "12abc"); echo "<br>";
var_dump((float) "1.5e3"); echo "<br>";
var_dump((int) true); echo "<br>";

echo "<br>"; 

$decimal = 255;
$hexadecimal  = 0xFF;
$octal = 0377;
$binaire = 0b11111111;

echo "decimal : $decimal<br>";
echo "Hexadecimal : $hexadecimal<br>";
echo "Octal : $octal<br>";
echo "Binaire : $binaire<br>";


echo "<h3>Exercice 1.5 : Chaines de caracteres</h3>";

$traitees = "égales à";
$ici = 2;

echo 'Ahmed a dit : "J\'ai réussi"<br>';
echo 'Voulez-vous supprimer C:\*.*?<br>';
echo 'Ceci n\'affichera pas \n de nouvelle ligne<br>';
echo 'Les variables ne seront pas $traitees $ici<br>';
echo "Les variables seront $traitees $ici<br>";

$texte = trim("*Bonjour les développeurs*", "*");
echo $texte . "<br>";

for ($i = 0; $i < strlen($texte); $i++) {
	echo $texte[$i] . "<br>";
}


?>

