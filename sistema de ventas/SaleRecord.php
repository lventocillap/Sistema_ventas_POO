<?php

declare(strict_types=1);
require_once 'Product.php';
require_once 'Sale.php';
class SaleRecord{
    public function __construct(
        private Client $client,
        private string $date,
        private array $sales
        // private array $products,
    ) {
    }
    public function getSaleInfo(): void
    {
        echo "------Venta----\n";
        echo "Fecha: {$this->date}\n";
        echo "---------------------------------\n";
        echo "Cliente: {$this->client->getInfoClient()}";
        echo "\n";
        echo "--------Productos----------\n";
        foreach ($this->sales as $product) {
            echo "Nombre :" . $product->getProduct()->getName();
            echo "\n";
            echo "Precio :" . $product->getProduct()->getPrice();
            echo "\n";
            echo"----------------------------\n";
        }
        echo "TOTAL: ".$this->total()."\n";
    }

    public function updateQuantity():void{
        foreach($this->sales as $product){
            $product->getProduct()->setStock($product->getProduct()->getStock()-$product->getQuantity());
        }
    }



    public function total(): float
    {
        $suma = 0;
        foreach ($this->sales as $product) {
            $suma += $product->getProduct()->getPrice();
        }
        return $suma;
    }
}