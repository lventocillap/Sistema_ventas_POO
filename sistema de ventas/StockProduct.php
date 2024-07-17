<?php

declare(strict_types=1);

require_once 'Product.php';

class StockProduct extends Product
{
    public function __construct(
        int $id,
        string $name,
        string $brand,
        float $price,
        private int $stock
    )
    {
        parent::__construct($id, $name, $brand, $price);
    }

    public function getStock():int{
        $r=$this->stock>=1 ? $this->stock : throw new Exception('Error numero negativo');
        return $r;
    }

    public function setStock($stock):void{
        $this->stock=$stock;
    }
}