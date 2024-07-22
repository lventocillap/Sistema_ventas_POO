<?php

declare(strict_types=1);

class LoanRegistry
{
    private array $loans;

    public function addLoan($loan): void
    {
        $this->loans[] = $loan;
        $loan->getBook()->setLoan(true);
    }

    public function listLoan(): void
    {


        $verification = null;
        foreach ($this->loans as $loan) {
            $now = new DateTime();

            $User = $loan->getUser();

            if ($User !== $verification) {
                echo "--------------PRESTAMO-----------------\n";
                echo $User->getInfoCompleteUser() . "\n";
                echo "---------------------------------------\n";
                $verification = $User;
            }
            echo $loan->getBook()->getInfoCompleteBook() . "\n";
            echo "Fecha de devolución :" . $loan->getReturnDay() . "\n";
            echo "---------------------------------------\n";
            if ($loan->getReturnDay() > $now->format('Y-m-d')) {
                echo "Tiene tiempo para devolver \n";
            } else {
                echo "Debe devolver el libro \n";
            }
            echo "---------------------------------------\n";
        }
    }
    // public function listLoan():void
    // {
    //     foreach($this->loans as $loan){
    //     echo $loan->getUser()->getInfoCompleteUser()."\n";
    //     echo $loan->getBook()->getInfoCompleteBook()."\n";
    //     echo"---------------------------------------\n";
    //     }
    // }

    public function totalLoans(): string
    {
        $total = 0;
        foreach ($this->loans as $loan) {
            $total++;
        }
        return "El total de prestamos es : " . $total;
    }
}
