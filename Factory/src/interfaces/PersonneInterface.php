<?php 
namespace Factory\interfaces;

interface PersonneInterface {
    public function getNom(): string;
    public function getPrenom(): string;
    public function getAge(): int;
}