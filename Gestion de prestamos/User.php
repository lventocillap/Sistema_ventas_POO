<?php

class User
{
    public function __construct(
        private int $id,
        private string $name,
        private string $dni,
    ) {
    }

    public function getInfoCompleteUser(): string
    {
        return "Su nombre es: " . $this->name . "\n" .
            "Sun DNI es: " . $this->dni;
    }

    public function getId(): int
    {
        return $this->id>0 ? $this->id : throw new Exception('Error id negativo');
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDni(): string
    {
        return $this->dni;
    }
}
