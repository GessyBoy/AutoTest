<?php

require_once __DIR__ . '/../vendor/autoload.php';

// Test si la classe App\Hello est trouvée
if (class_exists('App\Hello')) {
    echo "La classe Hello est bien chargée !";
} else {
    echo "La classe Hello n'est pas chargée.";
}
