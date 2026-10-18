<?php 
require_once "config.php";
require_once "includes/entete_inc.php";
require_once "includes/menu_inc.php";
require_once "includes/pied_inc.php";

echo "Hello PHP <br>"; 

//commentaire d'un ligne
#commentaire d'un ligne
/* 
commentaire de plusieur ligne
*/
$x =1;
$_x = 2;
$Prix_HT = '';
$état = '';
$Prix_ht = 60;
// $a est different à $A car php est un language sensible à la casse

echo defined('SEUIL');
echo defined('INCONNUE');

$tva = 20;
$TTC = $Prix_ht * (1 + $tva / 100);
echo '<br> Le prix TTC du produit est de '.$TTC. ' € <br>';

$test = '42';
echo '<pre>';
var_dump($test);
var_dump((bool)0);
var_dump((bool)0.0);
var_dump((bool)"0");
var_dump((bool)"");
var_dump((bool)"abc");
var_dump((bool)[]);
var_dump((bool)null);
var_dump((int)3.9);
var_dump((int)"12abc");
var_dump((float)"1.5e3");
var_dump((int)true);
echo '</pre>';
$nombre = 255;

echo 'En decimal: '.base_convert($nombre,10,10).'<br>';
echo 'En hexadécimal: '.base_convert($nombre,10,16).'<br>';
echo 'En octal: '.base_convert($nombre,10,8).'<br>';
echo 'En biniaire: '.base_convert($nombre,10,2).'<br>';

$traitees = "égales à";
$ici = 2;
echo "ahmed a dit : \"J'ai réussi\" <br>";
echo "Voulez-vous supprimer C:\*.*? <br>";
echo "Ceci n'affichera pas \\n de nouvelle ligne <br>";
echo "Les variables ne seront pas \$traitees \$ici <br>";
echo "Les variables seront $traitees $ici <br>";

$phrase = "*Bonjour les developpeurs*";
echo trim($phrase,"*"). '<br>';
$phrase = trim($phrase,"*");

for ($i = 0; $i < strlen($phrase); $i++) {
   echo "$phrase[$i] <br>";
}


?>