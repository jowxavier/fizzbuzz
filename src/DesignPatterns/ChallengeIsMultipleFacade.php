<?php

namespace App\FizzBuzz\DesignPatterns;

use App\FizzBuzz\MultipleFive;
use App\FizzBuzz\MainChallenge;
use App\FizzBuzz\MultipleThree;
use App\FizzBuzz\DesignPatterns\ChallengeIsMultipleStrategy;

class ChallengeIsMultipleFacade
{
    public function __construct(
        private int $limit,
    ) {}

    public function run()
    {
        $strategy = (new ChallengeIsMultipleStrategy)
                        ->addStrategy(new MultipleThree)
                        ->addStrategy(new MultipleFive);

        return (new MainChallenge($this->limit, $strategy))->run();
    }
}
