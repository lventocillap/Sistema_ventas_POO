<?php

class User
{
    public function __construct(
        private int $id,
        private string $name,
        private string $dni,
    ) {
    }

    public function getInfoCompleteUser(): string{
        return "Su nombre es: ".$this->name."\n".
        "Sun DNI es: ".$this->dni;
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
