<?php

function school($age) {
    // Si l'enfant a moins de 3 ans → crèche
    if ($age < 3) {
        return "creche";
    }
    // Si l'enfant a moins de 6 ans → maternelle
    else if ($age < 6) {
        return "maternelle";
    }
    // Moins de 11 ans → primaire
    else if ($age < 11) {
        return "primaire";
    }
    // Moins de 16 ans → collège
    else if ($age < 16) {
        return "college";
    }
    // Moins de 18 ans → lycée
    else if ($age < 18) {
        return "lycée";
    }
    // Sinon → rien
    else {
        return "";
    }
}

// Exemple d'appel
echo school(4); // Affichera "maternelle"

?>
