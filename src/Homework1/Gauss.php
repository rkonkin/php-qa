<?php

namespace Homework1;

class Gauss {
    public function getWithCycle(int $number): int {
        $sum = 0;

        for ($i = $number; $i > 0; $i--) {
            $sum += $i;
        }

        return $sum;
    }


    public function getWithFormula(int $number): int {
        return $number * ($number + 1) / 2;
    }
}

$sum = new Gauss();

echo "With Cycle:\n";
var_dump($sum->getWithCycle(3));
var_dump($sum->getWithCycle(100));

echo "With Formula:\n";
var_dump($sum->getWithFormula(3));
var_dump($sum->getWithFormula(100));
