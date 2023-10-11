<?php

use App\FizzBuzz\DesignPatterns\ChallengeIsMultipleFacade;

$param = 100;
$challengeIsMultipleFacade = (new ChallengeIsMultipleFacade($param))->run();

it('should be an array', fn() => expect($challengeIsMultipleFacade)->toBeArray());
it("should has {$param} positions", fn() => expect($challengeIsMultipleFacade)->toHaveCount($param));
it('should has words Batata, Doce and BatataDoce', fn() => expect($challengeIsMultipleFacade)->toContain('Batata', 'Doce', 'BatataDoce'));
