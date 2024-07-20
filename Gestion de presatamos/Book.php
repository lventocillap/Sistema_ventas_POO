<?php

declare(strict_types=1);
class Book
{
    public function __construct(
        private int $id,
        private string $title,
        private string $autor
    ) {
    }

    public function getId():int
    {
        return $this->id;
    }

    public function getTitle():string
    {
        return $this->title;
    }

    public function getAutor():string
    {
        return $this->autor;
    }
}
