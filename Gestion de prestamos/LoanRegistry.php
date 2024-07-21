<?php

declare(strict_types=1);

class LoanRecord
{
    private array $loans;

    public function __construct()
    {
    }

    public function addLoan($loan): void
    {
        $this->loans[] = $loan;
        $loan->getBook()->setLoan(true);
    }

    public function listLoan(): void
    {
        $verification = null;
        foreach ($this->loans as $loan) {
            $User = $loan->getUser();

            if ($User !== $verification) {
                echo "--------------PRESTAMO-----------------\n";
                echo $User->getInfoCompleteUser() . "\n";
                echo "---------------------------------------\n";
                $verification = $User;
            }
            echo $loan->getBook()->getInfoCompleteBook() . "\n";
            echo "---------------------------------------\n";
        }
    }
    // public function listLoan():void
    // {
    //     foreach($this->loans as tInfoCompleteU$loan){
    //     echo $loan->getUser()->geser()."\n";
    //     echo $loan->getBook()->getInfoCompleteBook()."\n";
    //     echo"---------------------------------------\n";
    //     }
    // }

    public function totalLoans(): string
    {
        $total = 0;
        foreach ($this->loans as $loan){
            $total ++;
        }
        return "El total de prestamos es : ".$total;
    }
}
