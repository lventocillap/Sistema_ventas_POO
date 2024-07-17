<?php

declare(strict_types=1);

class Inventory
{

    public function __construct(
        private array $products
    ) {
    }
    public function listProduct(): void
    {
        echo "--------Inventario----------------\n";
        foreach ($this->products as $product) {
            echo "---------------------------------\n";
            echo "Nombre :" . $product->getName()."\n";
            echo "Precio :" . $product->getPrice()."\n";
            echo "Cantidad :" . $product->getStock()."\n";
        }
    }
}
