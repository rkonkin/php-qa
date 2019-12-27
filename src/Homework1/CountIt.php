<?php

namespace Homework1;

class CountIt {
    public function solution(int $digit, int $number): int {
        return substr_count($number, $digit);
    }
}

$counter = new CountIt();

var_dump($counter->solution(5, 442158755745));