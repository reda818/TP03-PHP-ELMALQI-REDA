<?php
require_once("config.php");
if (isset($_POST["nom"]) && isset( $_POST["note_info"]) && $_POST["note_math"]) {
    $nom = trim($_POST["nom"]);
    $note_info = trim($_POST["note_info"]);
    $note_math = trim($_POST["note_math"]);
    if (!empty($nom) && $note_info !== "" && $note_math !== "") {
        if (NOTE_MIN <= $note_info && $note_info<= NOTE_MAX && 
        NOTE_MIN <= $note_math && $note_math <= NOTE_MAX){
            $file = fopen("data/notes.csv", "a");

            if ($file) {

                $ligne = [$nom, $note_info, $note_math];
                fputcsv($file, $ligne, ";");
                fclose($file);

                echo "La note de " . htmlspecialchars($nom) . " en informatique est : " . $note_info . "<br>";
                echo "La note de " . htmlspecialchars($nom) . " en mathématiques est : " . $note_math . "<br>";
                echo "Données enregistrées avec succès dans data/notes.csv.";
            } 
            else {
                echo "Erreur : Impossible d'ouvrir le fichier data/notes.csv.";
            }
        }
        else { echo "les notes n'est pas coreect.";}
    }
    else { echo "les information est vide.";}

}
else{echo "Erreur: Accés direct refusé";}

// en préférer POST à GET car les information renvois est cachées et n'affiche rien dont URL.
//est un tableau associatif superglobal qui contient les variables superglobal: $_GET, $_POST et $_COOKIE.
?>