<?php 

require_once "includes/menu_inc.php";
require_once "includes/pied_inc.php";
function mention($note){
    if ($note >= 16) 
        return "Trés bien";
    elseif ($note >= 14)
        return "Bien";
    elseif ($note >= 12)
        return "Assez bien";
    elseif ($note >= SEUIL) 
        return "Passable";
    else
        return "Ajourné";

}



$mois = date("m");
switch ($mois) {
    case 1: echo 'Janvier';break;
    case 2: echo 'February';break;
    case 3: echo 'March' ; break;
    case 4: echo 'April' ; break;
    case 5: echo 'May'; break;
    case 6: echo 'June'; break;
    case 7: echo 'July'; break;
    case 8: echo 'August'; break;
    case 9: echo 'September'; break;
    case 10: echo 'October'; break;
    case 11: echo 'November'; break;
    case 12: echo 'December'; break;
    default: echo "Numéro de mois invalide" ; break;
}
// Q:il va continuer à exécuter les instructions des 'case' suivants jusqu'à rencontrer un 'break' ou la fin du 'switch'
echo "<br>";
for ($i = 1; $i <= 6; $i++){
    for ($j = 1; $j <= $i; $j++){
        echo "*";
    }
    echo "<br>";
}
echo"------<br>";
$i = 0;
while ($i <= 20) {
    
    if ($i == 10) echo "<b>".$i."</b><br>";
        
    else echo $i."<br>";
    $i+= 2;
}
echo"------<br>";
for ($i = 0; $i <=10; $i++){
    if ($i % 2 == 0) echo "$i <br>";
    else continue;
}
echo"------<br>";
$i=1;
while ($i < 20) {
    switch ($i) {
        case 5: echo "At $i <br>"; break;
        case 10: echo "At 10; quitting <br>";break 2;

    }
    $i++;
}
echo"------<br>";
$i = 0;
do {
    
    if ($i == 10) echo "<b>".$i."</b><br>";   
    else echo $i."<br>";
    $i+= 2;
}while ($i <= 20);
?>