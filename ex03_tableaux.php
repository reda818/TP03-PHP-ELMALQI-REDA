
<?php
require_once "config.php";
require_once "includes/entete_inc.php";
require_once "includes/menu_inc.php";
require_once "includes/pied_inc.php";

//pour 'require' le message est:(PHP Fatal error:  Uncaught Error: Failed opening required 'te.php') et l'exécution du script s'arrête immédiatement.
//pour 'include le message est:(PHP Warning:  include(): Failed opening 'te.php') et le script continue son exécution.
//avec include deux fois le menu s'affiche deux fois à l'écran.
// avec include_once deux fois le menu ne s'affiche qu'une seule fois.
$notes = [
    "Mohamed" => 16,
    "Ahmed" => 14,
    "Hind" => 13,
    "Aicha" => 15,
    "Samir" => 13,
    "Zakaria" => 13,
    "Rafik" => 10,
    "Ilham" => 9,
    "Hamza" => 7,
    "Sami" => 7,
    "Noura" => 14
];
$modules = ["WEB_2", "UML", "Analyse"];
foreach ($modules as $module) {
    echo "$module<br>";
}
echo $modules[0] . "<br>";
echo $modules[1] . "<br>";
echo $modules[2] . "<br>";


echo "<table border='1'>";
echo "<tr>
  <th>Étudiant</th>
  <th>Note</th>
  <th>Mention</th>
</tr>";
$meilleure_note = 0;
$faible_note = 20;
$somme = 0;
$effectifs = [
    "Trés bien"  => 0,
    "Bien"       => 0,
    "Assez bien" => 0,
    "Passable"   => 0,
    "Ajourné"  => 0
];
foreach ($notes as $nom => $note) {
    $somme += $note;
    echo "<tr>
    <td>$nom</td>
    <td>$note</td>
    <td>".mention($note)."</td>
    </tr>";
    if ($note > $meilleure_note) {
        $meilleure_note = $note;
    }
    if ($note < $faible_note) {
        $faible_note = $note;
    }
    foreach ($effectifs as $mention => $count) {
        if (mention($note) == $mention) {
            $effectifs[$mention]++;
        }
    }
}
echo "</table>";

$moyenne = $somme / count($notes);
echo "<br> meilleur note: $meilleure_note<br>";
echo "faible note: $faible_note<br>";
echo "moyenne: $moyenne<br>";
echo "verification de moyenne:".array_sum($notes)/count($notes)."<br>";
echo "verification le max:".max($notes)."<br>";
echo "verification le min:".min($notes)."<br>";
echo "------<br>";
foreach ($effectifs as $mention => $nb) {
    echo $mention.": ".$nb." apprenant(s)<br>";
}

function afficher($x){
    foreach ($x as $nom => $note) {
     echo $nom.": ".$note."<br>";
}
echo "------ <br>";
}
echo "<b>trié par ksort:<br></b>";
$tab1 = $notes;
ksort($tab1);
afficher($tab1);

echo "<b>trié par arsort:<br></b>";
$tab2 = $notes;
arsort($tab2);
afficher($tab2);

echo "<b>trié par krsort:<br></b>";
$tab3 = $notes;
krsort($tab3);
afficher($tab3);

echo "<b>trié par asort:<br></b>";
$tab4 = $notes;
asort($tab4);
afficher($tab4);

//Q: pour un tableau indexé comme '$modules' en utilise 'tri()' ou 'rtri()'

$a = ["x" => 1, "y" => 2];
$b = ["y" => 2, "x" => 1];
$s = $a + $b;
afficher($s);
// $a + $b ne change rien car tous les éléments de $b exist déja dans $a.
echo $a == $b ;
// il affiche true car == vérifier seulement clé/valeur des deux tableaux.
echo "<br>";
echo $a === $b ;
// il affiche false car === vérifier clé/valeur des deux tableaux et leur ordre.
?>