<?php

use App\FizzBuzz\MultipleFive;
use App\FizzBuzz\MultipleThree;

$multipleThree = new MultipleThree();
$multipleFive = new MultipleFive();

it('should return true to multiple three', fn() => expect($multipleThree->check(9))->toBeTrue());
it('should return true to multiple fiv', fn() => expect($multipleFive->check(15))->toBeTrue());
