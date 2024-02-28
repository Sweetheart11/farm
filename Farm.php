<?php

declare(strict_types=1);

class Farm {
    public $animals = [];
    public $products = [];

    public function startWeekCycle(){
        for ($day = 1; $day <= 7; $day++) {
            $this->collectProduction();
        }

        
        $this->countProduction();
    }

    public function addAnimal(Animal $animal) {
        $this->animals[] = $animal;
    }

    public function collectProduction() {
        foreach($this->animals as $animal) {
            $collectedProduction = $animal->collectProduction();
            for ($i=0; $i < $collectedProduction; $i++) { 
                $this->products[] = $animal->returnCollectedProduction();
            }
        }
    }

    public function countAnimals() {
        $animalCounts = [];

        foreach ($this->animals as $animal) {
            $className = $animal::class;
            if(!array_key_exists($className, $animalCounts)) {
                $animalCounts[$className] = 1;
            } else {
                $animalCounts[$className]++;
            }
        }

        foreach ($animalCounts as $animal => $count) {
            echo PHP_EOL."Количество $animal на ферме: $count";
        }
    }

    public function countProduction() {
        $productionCounts = [];

        foreach ($this->products as $product) {
            $className = $product::class;
            if(!array_key_exists($className, $productionCounts)) {
                $productionCounts[$className] = 1;
            } else {
                $productionCounts[$className]++;
            }
        }

        foreach ($productionCounts as $product => $count) {
            echo PHP_EOL."Количество продукта $product на ферме: $count";
        }
    }
}