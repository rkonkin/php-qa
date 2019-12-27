<?php

namespace Homework1;

class SecondMax {
    public function calculator(array $array): int {
        if (count($array) === 1) {
            return $array[0];
        }

        if ($array[0] > $array[1]) {
            $firstMax = $array[0];
            $secondMax = $array[1];
        } else {
            $firstMax = $array[1];
            $secondMax = $array[0];
        }

        foreach ($array as $value) {
            if ($value > $firstMax) {
                $secondMax = $firstMax;
                $firstMax = $value;
            } else if ($value > $secondMax && $value !== $firstMax) {
                $secondMax = $value;
            }
        }

        return $secondMax;
    }
}

$yardstick = new SecondMax();

var_dump($yardstick->calculator([1, 2, 6, 3, 0, 7, 9, 8]));
var_dump($yardstick->calculator([3, 2, 1]));
var_dump($yardstick->calculator([3, 4, 5, 5]));
var_dump($yardstick->calculator([2]));