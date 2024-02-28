<?php

declare(strict_types=1);

require_once 'Animal.php';

class Cow extends Animal {

    public function __construct() {
        parent::__construct( [8, 12]);
    }

    public function returnCollectedProduction() {
        return new Milk;
    }

}