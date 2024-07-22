<?php

declare(strict_types=1);

class Loan
{
    public function __construct(
        private Book $book,
        private User $user,
        private string $date,
    ) {
    }

    public function getBook(): Book
    {
        return $this->book;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function getReturnDay(): string
    {
        return $this->date;
    }
}
