<?php

namespace Homework1;

class Gauss {
    public function get(int $number): int {
        $sum = 0;

        for ($i = $number; $i > 0; $i--) {
            $sum += $i;
        }

        return $sum;
    }
}

$sum = new Gauss();

var_dump($sum->get(3));
var_dump($sum->get(100));
