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


    public function get2(int $number): int {
        return $number * ($number + 1) / 2;
    }
}

$sum = new Gauss();

var_dump($sum->get(3));
var_dump($sum->get(100));

var_dump($sum->get2(3));
var_dump($sum->get2(100));
