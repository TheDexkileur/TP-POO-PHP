<?php

namespace Safari\Animaux;

class Lion extends Animal
{
    protected $niveauAgressivite = 5; // par défaut

    public function crier()
    {
        echo "ROAAAAR ! " . $this->nom . " rugit férocement.<br>";
    }

    public function chasser()
    {
        echo $this->nom . " part en chasse.<br>";
    }

    public function setNiveauAgressivite($niveau)
    {
        if ($niveau >= 1 && $niveau <= 10) {
            $this->niveauAgressivite = $niveau;
        }
    }
}
