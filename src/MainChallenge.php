<?php

namespace App\FizzBuzz;

use App\FizzBuzz\DesignPatterns\ChallengeIsMultipleStrategy;

class MainChallenge
{
    public function __construct(
        private int $limit,
        private ChallengeIsMultipleStrategy $strategy
    ) {}

    public function run(): array
    {
        $infos = [];
        for ($i = 1; $i <= $this->limit; $i++) {
            $message = '';
            foreach ($this->strategy->getStrategies() as $strategy) {
                if ($strategy->check($i)) {
                    $message .= $strategy->getMessage();
                }
            }

            array_push($infos, empty($message) ? $i : $message);
        }

        return $infos;
    }
}
