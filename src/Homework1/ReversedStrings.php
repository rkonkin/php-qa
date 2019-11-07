<?php

namespace ReversedStrings;

class ReversedStrings {
    public function solution(string $string): string {
        return strrev($string);
    }
}

$reverse = new ReversedStrings();

var_dump($reverse->solution("world"));
