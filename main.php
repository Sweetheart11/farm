<?php

declare(strict_types=1);

require_once 'Farm.php';
require_once 'Cow.php';
require_once 'Chicken.php';
require_once 'Product.php';
require_once 'Egg.php';
require_once 'Milk.php';
require_once 'Animal.php';

$farm = new Farm();
for($i=0; $i<10; $i++) {
    $farm->addAnimal(new Cow);
}
for($i=0; $i<20; $i++) {
    $farm->addAnimal(new Chicken);
}
echo 'Первый подсчет животных:';
$farm->countAnimals();
echo PHP_EOL;

echo PHP_EOL . 'Первая неделя';
$farm->startWeekCycle();
echo PHP_EOL;

for($i=0; $i<5; $i++) {
    $farm->addAnimal(new Chicken);
}
$farm->addAnimal(new Cow);

echo PHP_EOL . 'Второй подсчет животных:';
$farm->countAnimals();
echo PHP_EOL;

echo PHP_EOL . 'Вторая неделя';
$farm->startWeekCycle();
echo PHP_EOL;
