<?php
if (isset($_GET["nom"]) && isset( $_GET["prenom"]) && $_GET["sexe"]) {
    $nom = trim($_GET["nom"]);
    $prenom = trim($_GET["prenom"]);
    $sexe = trim($_GET["sexe"]);
    
    if ($sexe == "M") {
            echo "Bonjour Monsieur".htmlspecialchars($prenom).htmlspecialchars($nom);
    }
    elseif ($sexe == "F") {
            echo "Bonjour Madame".htmlspecialchars($prenom).htmlspecialchars($nom);
    }
     
}
else{echo "Erreur: Accés direct refusé";}
?>