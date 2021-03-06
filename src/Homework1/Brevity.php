<?php

namespace Homework1;

class Brevity {
    public function calculator(string $string): string {
        $wordsArray = explode(" ", $string);
        $surname = $wordsArray[0];
        $restWords = array_slice($wordsArray, 1);

        $result = array_reduce($restWords, function ($carry, $word) {
            $carry .= ' '.ucfirst($word[0]).'.';

            return $carry;
        }, $surname);

        return $result;
    }
}

$name = new Brevity();

var_dump($name->calculator("Konkin Roman Alexandrovich lalalala"));
var_dump($name->calculator("Konkin Roman Alexandrovich"));
var_dump($name->calculator("Konkin Roman"));
var_dump($name->calculator("Konkin"));
