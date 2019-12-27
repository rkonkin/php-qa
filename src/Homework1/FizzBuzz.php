<?php

namespace Homework1;

class FizzBuzz {
    public function calculator(int $number): string {
        if ($number % 3 === 0 && $number % 5 === 0) {
            return 'FizzBuzz';
        }

        if ($number % 3 === 0) {
            return 'Fizz';
        }


        if ($number % 5 === 0) {
            return 'Buzz';
        }

        return strval($number);
    }
}

$fb = new FizzBuzz();

var_dump($fb->calculator(1));
var_dump($fb->calculator(2));
var_dump($fb->calculator(3));
var_dump($fb->calculator(4));
var_dump($fb->calculator(5));
var_dump($fb->calculator(6));
var_dump($fb->calculator(10));
var_dump($fb->calculator(15));