<?php

for ($i = 1; $i <= 100; $i++) {

    // Si multiple de 3 ET 5 → FooBar
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FooBar<br>";
    }
    // Si multiple de 3 → Foo
    else if ($i % 3 == 0) {
        echo "Foo<br>";
    }
    // Si multiple de 5 → Bar
    else if ($i % 5 == 0) {
        echo "Bar<br>";
    }
    // Sinon afficher le nombre
    else {
        echo $i . "<br>";
    }
}

?>
