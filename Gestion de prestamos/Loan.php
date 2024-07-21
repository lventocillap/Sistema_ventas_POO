<?php

declare(strict_types=1);

class Loan
{
    public function __construct(
        private Book $book,
        private User $user,
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
}
