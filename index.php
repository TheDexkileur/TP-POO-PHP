<?php

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    $file = __DIR__ . '/' . $class . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});

use Safari\Parc\Enclos;
use Safari\Animaux\Lion;
use Safari\Animaux\Perroquet;

$enclos = new Enclos(3);

$lion = new Lion("Simba", 150);
$perroquet1 = new Perroquet("Rio", 2);
$perroquet2 = new Perroquet("Jago", 3);
$animalEnTrop = new Perroquet("Tropico", 1);

$enclos->ajouterAnimal($lion);
$enclos->ajouterAnimal($perroquet1);
$enclos->ajouterAnimal($perroquet2);
$enclos->ajouterAnimal($animalEnTrop); // doit être refusé

$enclos->visiteGuidee();

$lion->tomberMalade();
$lion->seSoigner();
