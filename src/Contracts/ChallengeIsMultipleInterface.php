<?php

namespace App\FizzBuzz\Contracts;

interface ChallengeIsMultipleInterface
{
    public function check(int $number): bool;
    public function getMessage(): string;
}