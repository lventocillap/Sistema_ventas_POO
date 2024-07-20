<?php

declare(strict_types=1);

class Product
{

    public function __construct(
        protected int $id,
        protected string $name,
        protected string $brand,
        protected float $price
    ) {
    }

    public function getProductComplete(): string
    {
        return $this->name . " " . $this->brand . " cuesta " . $this->price;
    }

    public function getPrice(): float
    {
        $price = $this->price >= 1 ? $this->price : throw new Exception('Error numero negativo');
        return $price;
    }

    public function getName(): string
    {

        return $this->name;
    }
}
