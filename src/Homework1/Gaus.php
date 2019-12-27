<?php

namespace Homework1;

class Gaus {
    public function calculator(int $number): int {
        return $number * ($number + 1) / 2;
    }
}

$sum = new Gaus();

var_dump($sum->calculator(3));
var_dump($sum->calculator(100));
