1
22
333
4444
55555

<?php

function doubleBoucle($n) {
    $resultat = "";

    // Première boucle → pour chaque ligne
    for ($i = 1; $i <= $n; $i++) {

        // Deuxième boucle → répéter le chiffre "i" i fois
        for ($j = 1; $j <= $i; $j++) {
            $resultat .= $i;
        }

        // Ajouter un saut de ligne après chaque ligne
        $resultat .= "<br>";
    }

    return $resultat;
}

echo doubleBoucle(5);

?>
