<?php

declare(strict_types=1);

class Client
{

    public function __construct(
        private int $id,
        private string $name,
        private String $DNI,
    ) {
    }

    public function getInfoClient(): string
    {
        return "Su nomrbe es " . $this->name . " y su DNI es " . $this->DNI;
    }
}
