<?php

$url_fichier_source = "https://blog-investissement-immobilier.lybox.fr/contact.txt";
$nom_fichier = "contact.txt";

$nouveaux_contacts = ["Alice Dupont", "John Doe", "Jean Martin"];

$contenu_existant = @file_get_contents($nom_fichier);

if ($contenu_existant === FALSE) {
    echo "Le fichier '$nom_fichier' n'existe pas encore. Il va être créé.\n";
    $contacts_existants = [];
} else {
    $contacts_existants = array_filter(explode("\n", $contenu_existant));
    echo "Contacts existants trouvés : " . count($contacts_existants) . "\n";
}

$contacts_normalises = [];

foreach ($contacts_existants as $contact) {
    $contacts_normalises[] = strtolower(trim($contact));
}

$contacts_a_ajouter = [];

echo "\n--- Vérification des nouveaux contacts ---\n";

foreach ($nouveaux_contacts as $nouveau_contact) {
    $nouveau_contact_normalise = strtolower(trim($nouveau_contact));

    if (!in_array($nouveau_contact_normalise, $contacts_normalises)) {
        $contacts_a_ajouter[] = $nouveau_contact;
        echo " Ajout de : " . $nouveau_contact . "\n";
        $contacts_normalises[] = $nouveau_contact_normalise; 
    } else {
        echo " Déjà présent : " . $nouveau_contact . " (non ajouté)\n";
    }
}

if (count($contacts_a_ajouter) > 0) {
    $contenu_a_ecrire = implode("\n", $contacts_a_ajouter) . "\n";
    
    if (file_put_contents($nom_fichier, $contenu_a_ecrire, FILE_APPEND | LOCK_EX) !== FALSE) {
        echo "\n Succès : " . count($contacts_a_ajouter) . " nouveaux contacts ont été ajoutés au fichier '$nom_fichier'.\n";
    } else {
        echo "\n Erreur lors de l'écriture dans le fichier '$nom_fichier'.\n";
    }
} else {
    echo "\nℹ Aucun nouveau contact unique à ajouter.\n";
}

?>