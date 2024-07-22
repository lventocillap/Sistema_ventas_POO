<?php

declare(strict_types=1);
class Book
{
    // private bool $isloan;

    public function __construct(
        private int $id,
        private string $title,
        private string $autor,
        private bool $isloan = false
    ) {
        // $this->isloan = false;
    }

    public function getInfoCompleteBook(): string
    {
        return "El libro: " . $this->title . "\n" .
            "El autor: " . $this->autor;
    }

    public function getId(): int
    {
        return $this->id>0 ? $this->id : throw new Exception('Error id negativo');
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAutor(): string
    {
        return $this->autor;
    }

    public function getisLoan(): bool
    {
        return $this->isloan;
    }

    public function setLoan($loan): void
    {
        $this->isloan = $loan;
    }
}
