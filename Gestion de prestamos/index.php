<?php

require_once 'Book.php';
require_once 'User.php';
require_once 'Library.php';
require_once 'Loan.php';
require_once 'LoanRegistry.php';

$library = new Library();
$loanRegistry = new LoanRegistry();

$user1 = new User(1, "Luis", "12345678");
$user2 = new User(2, "Pedro", "12345678");

$book1 = new Book(1, "Los tres cerditos", "Pablo");
$book2 = new Book(2, "La caperucita roja", "Maria");
$book3 = new Book(3, "El patito feo", "Adrian");
$book4 = new Book(4, "La gallina de los huevos de oro", "Esteban");



$library->addBook($book1);
$library->addBook($book2);
$library->addBook($book3);
$library->addBook($book4);

$library->listBook() . "\n";
echo "|||||||||||||||||||||||||||||||||||||||||||||||||||||||| \n";

$loan1 = new Loan($book1, $user1, '2024-05-12');
$loan2 = new Loan($book2, $user2, '2024-07-24');
$loan3 = new Loan($book3, $user2, '2024-11-13');

$loanRegistry->addLoan($loan1);
$loanRegistry->addLoan($loan2);
$loanRegistry->addLoan($loan3);

$loanRegistry->listLoan() . "\n";
echo "|||||||||||||||||||||||||||||||||||||||||||||||||||||||| \n";
$library->listBook() . "\n";
echo "|||||||||||||||||||||||||||||||||||||||||||||||||||||||| \n";
echo $loanRegistry->totalLoans();
