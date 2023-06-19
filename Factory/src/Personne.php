<?php 

namespace Factory;

use Factory\interfaces\PersonneInterface;

class Personne implements PersonneInterface{
   
    private string $nom;

    private string $prenom;

    private int $age;

    public function __construct(string $nom, string $prenom, int $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getPrenom(): string {
        return $this->prenom;
    }

    public function getAge(): int {
        return $this->age;
    }

    public function __toString() : string{
        return $this->getNom().' '. $this->getPrenom().' '. $this->getAge();
    }
}