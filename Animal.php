<?php

declare(strict_types=1);

class Animal {
    public array|int $productionRate;

    public function __construct(array|int $productionRate) {
        $this->productionRate = $productionRate;
    }

    public function collectProduction() {
        $collectedProduct = 0;
        if(is_int($this->productionRate)) {
            $collectedProduct = $this->productionRate;
        }
        if(is_array($this->productionRate) ) {
            $collectedProduct = rand($this->productionRate[0], $this->productionRate[1]);
        }

        return $collectedProduct;
    }

    public function returnCollectedProduction() {
        return new Product;
    }

}