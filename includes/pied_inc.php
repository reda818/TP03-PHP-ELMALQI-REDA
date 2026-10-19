<p>Date : <?= date("d/m/Y") ?></p>

<?php
$aujourdhui = new DateTime();
$fin_semestre = new DateTime("2027-01-31");
$intervalle = $aujourdhui->diff($fin_semestre);
?>

<p>Jours restants avant la fin du semestre : <?= $intervalle->format("%a") ?></p>

<?php
$jour = 14;
$mois = 10;
$annee = 2026;

if (checkdate($mois, $jour, $annee)) {
    echo "<p>Date saisie valide</p>";
} else {
    echo "<p>Date saisie invalide</p>";
}
?>