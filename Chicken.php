<?php

declare(strict_types=1);

require_once 'Animal.php';


class Chicken extends Animal {

    public function __construct() {
        parent::__construct( [0, 1]);
    }

    public function returnCollectedProduction() {
        return new Egg;
    }

}