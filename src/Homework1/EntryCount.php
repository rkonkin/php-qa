<?php

namespace Homework1;

class EntryCount {
    public function count(int $digit, int $number): int {
        return preg_match_all("/$digit/", strval($number));
    }
}

$counter = new EntryCount();

var_dump($counter->count(5, 442158755745));