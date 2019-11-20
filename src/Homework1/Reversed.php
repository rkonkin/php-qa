<?php

namespace Homework1;

class Reversed {
    public function solution(string $string): string {
        return strrev($string);
    }
}

$reverse = new Reversed();

var_dump($reverse->solution("world"));
