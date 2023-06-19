<?php 

namespace Factory;

use Factory\interfaces\PersonneFactoryInterface;
use Factory\interfaces\PersonneInterface;

class PersonneFactory implements PersonneFactoryInterface{

    public function createPersonne(string $nom,string $prenom,int $age): PersonneInterface {
        return new Personne($nom,$prenom,$age);
    }
}