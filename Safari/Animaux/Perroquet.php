<?php

namespace Safari\Animaux;

class Perroquet extends Animal
{
    public function crier()
    {
        echo "Coco veut un gâteau ! (" . $this->nom . " siffle)<br>";
    }

    public function voler()
    {
        echo $this->nom . " s'envole.<br>";
    }
}
