<?php

namespace App\FizzBuzz;

use App\FizzBuzz\Contracts\ChallengeIsMultipleInterface;

class MultipleFive implements ChallengeIsMultipleInterface
{
    public function check(int $number): bool
    {
        return $number % 5 == 0;
    }

    public function getMessage(): string
    {
        return 'Doce';
    }
}
