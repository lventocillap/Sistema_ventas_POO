<?php

declare(strict_types=1);

require_once 'product.php';

class Sale
{
    public function __construct(
        private StockProduct $product,
        private int $quantity
    )
    {
        
    }

    public function getProduct():StockProduct{
        return $this->product;
    }

    public function getQuantity():int{
        return $this->quantity;
    }
}
