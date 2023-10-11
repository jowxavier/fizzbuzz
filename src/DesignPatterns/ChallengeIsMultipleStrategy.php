<?php

namespace App\FizzBuzz\DesignPatterns;

use App\FizzBuzz\Contracts\ChallengeIsMultipleInterface;

class ChallengeIsMultipleStrategy
{
    private array $strategies;

    public function addStrategy(ChallengeIsMultipleInterface $strategy): ChallengeIsMultipleStrategy
    {
        $this->strategies[] = $strategy;

        return $this;
    }

    public function getStrategies(): array
    {
        return $this->strategies;
    }
}