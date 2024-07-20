<?php

class User
{
    public function __construct(
        private int $id,
        private string $name,
        private string $dni,
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDni() : string 
    {
        return $this->dni;
    }
}
