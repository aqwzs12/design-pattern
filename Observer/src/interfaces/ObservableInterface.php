<?php 

namespace App\interfaces;

interface ObservableInterface {

    public function attach(ObserverInterface $observer): never;
    public function detach(ObserverInterface $observer): never;
    public function notify();

}