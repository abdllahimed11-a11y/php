<?php

$eleves = [
    ["nom" => "Alice", "notes" => [15, 14, 16]],
    ["nom" => "Bob", "notes" => [12, 10, 11]],
    ["nom" => "Claire", "notes" => [18, 17, 16]]
];

echo "--- Affichage des moyennes des élèves ---\n";

foreach ($eleves as $eleve) {
    $nom = $eleve["nom"];
    $notes = $eleve["notes"];

    $somme_notes = 0;
    
    // On calcule la somme des notes en parcourant le tableau 'notes'
    foreach ($notes as $note) {
        $somme_notes += $note;
    }
    
    // On utilise la fonction 'count()' pour obtenir le nombre de notes (autorisée par l'énoncé)
    $nombre_notes = count($notes);

    if ($nombre_notes > 0) {
        $moyenne = $somme_notes / $nombre_notes;
        // On utilise number_format pour un affichage plus propre (deux décimales)
        echo "L'élève " . $nom . " a une moyenne de : " . number_format($moyenne, 2) . "\n";
    } else {
        echo "L'élève " . $nom . " n'a pas de notes pour le moment.\n";
    }
}

?>