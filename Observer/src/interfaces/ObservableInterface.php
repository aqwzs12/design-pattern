<?php 

namespace App\interfaces;

interface ObservableInterface {

    public function attach(ObserverInterface $observer);
    public function detach(ObserverInterface $observer);
    public function notify();

}