<?php

declare(strict_types=1);

class Library
{
    private array $books;

    public function addBook(Book $book): void
    {
        $this->books[$book->getId()] = $book;
    }

    public function listBook(): void
    {
        echo "----------LIBROS DISPONIBLES------------\n";
        foreach ($this->books as $book) {
            if (!$book->getisLoan()) {
                echo $book->getInfoCompleteBook() . "\n";
                echo "---------------------------------\n";
            }
        }
        echo "--------LIBROS PRESTADOS----------\n";
        foreach ($this->books as $book) {
            if ($book->getisLoan()) {
                echo $book->getInfoCompleteBook() . "\n";
                echo "---------------------------------\n";
            }
        }
    }
}
