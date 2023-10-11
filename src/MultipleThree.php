<?php

namespace App\FizzBuzz;

use App\FizzBuzz\Contracts\ChallengeIsMultipleInterface;

class MultipleThree implements ChallengeIsMultipleInterface
{
    public function check(int $number): bool
    {
        return $number % 3 == 0;
    }

    public function getMessage(): string
    {
        return 'Batata';
    }
}
