<?php

namespace Homework1;

class CountIt {
    public function solution(int $digit, int $number): int {
        return preg_match_all("/$digit/", strval($number));
    }
}

$counter = new CountIt();

var_dump($counter->solution(5, 442158755745));