<?php
$fichier = "contact.txt";
$contactsExistants = file($fichier, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$contact = ["Alice Dupont", "John Doe", "Jean Martin"];
$handle = fopen($fichier, "a");
foreach ($contact as $c) {
    if (!in_array($c, $contactsExistants)) {
        fwrite($handle, $c . "\n");
        echo "Contact ajouté : $c<br>";
    } else {
        echo "Contact déjà présent : $c<br>";
    }
}

fclose($handle);
?>
