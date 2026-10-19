<?php
$resultats = [];

if (file_exists("data/notes.csv")) {
    $fp = fopen("data/notes.csv", "r");
    while (($ligne = fgetcsv($fp, 1000, ";")) !== false) {
        if (count($ligne) >= 3) {
            $info = (float)$ligne[1];
            $math = (float)$ligne[2];
            $resultats[] = [
                "nom" => trim($ligne[0]),
                "notes" => ["info" => $info, "math" => $math],
                "moyenne" => ($info + $math) / 2
            ];
        }
    }
    fclose($fp);
}

$json = json_encode($resultats);
file_put_contents("data/notes.json", $json);

$data = file_get_contents("data/notes.json");
$tab = json_decode($data, true);

echo "<pre>";
print_r($tab);
echo "</pre>";

echo "<hr>";
echo "JSON : " . $json . "<br><br>";
echo "SERIALIZE : " . serialize($resultats);
?>