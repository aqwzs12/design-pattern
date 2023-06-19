<?php 

namespace Factory\interfaces;

interface PersonneFactoryInterface {
    public function createPersonne(string $nom,string $prenom,int $age): PersonneInterface;
}