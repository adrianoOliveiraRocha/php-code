<?php

require_once('src/BurgerLazyLoader.php');

$burger = BurgerLazyLoader::getBurger(true, true);
echo "Burguer with cheese and fries costs: R$: " . $burger->getPrice() . "\n";

$burger = BurgerLazyLoader::getBurger(true, false);
echo "Burger with cheese and no fries costs: R$: " . $burger->getPrice() . "\n";

$burger = BurgerLazyLoader::getBurger(false, true);
echo "Burger with no cheese and fries costs: R$: " . $burger->getPrice() . "\n";

echo "\nInstances in lazy loader: " . BurgerLazyLoader::getBurgerCount(). "\n";



