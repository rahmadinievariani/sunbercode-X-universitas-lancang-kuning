<?php

require_once('Animal.php');

class Frog extends Animal{
    public $legs = 4;

    public function buduk(){
        echo "jump : hop hop";
    }
}

?>