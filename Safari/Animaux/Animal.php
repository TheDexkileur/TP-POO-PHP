<?php

namespace Safari\Animaux;

class Animal
{
    protected $nom;
    protected $poids;
    protected $estMalade = false;

    public function __construct($nom, $poids)
    {
        $this->nom = $nom;
        $this->poids = $poids;
    }

    public function manger()
    {
        echo "L'animal mange.<br>";
    }

    public function seSoigner()
    {
        $this->estMalade = false;
        echo $this->nom . " est soigné.<br>";
    }

    public function tomberMalade()
    {
        $this->estMalade = true;
        echo $this->nom . " est malade...<br>";
    }

    public function crier()
    {
        echo "L'animal fait un bruit.<br>";
    }

    public function getNom()
    {
        return $this->nom;
    }
}
