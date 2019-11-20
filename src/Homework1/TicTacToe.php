<?php

namespace Homework1;

class TicTacToe {
    private function checkLine(array $line): ?string {
        $unique = array_unique($line);

        if (count($unique) === 1) {
            return $unique[0];
        }

        return null;
    }

    public function check(array $board) {
        // Победа по горизонтаи
        foreach ($board as $row) {
            if ($winner = $this->checkLine($row)) {
                return $winner;
            }
        }

        // Победа по вертикали
        foreach ($board as $index => $row) {
            $column = array_column($board, $index);

            if ($winner = $this->checkLine($column)) {
                return $winner;
            }
        }

        // Победа по диагонали
        $diagonalLeftRight = [];
        $diagonalRightLeft = [];
        foreach ($board as $index => $row) {
            $diagonalLeftRight[] = $board[$index][$index];
            $diagonalRightLeft[] = $board[$index][count($board) - ($index + 1)];
        }

        if ($winner = $this->checkLine($diagonalLeftRight)) {
            return $winner;
        }

        if ($winner = $this->checkLine($diagonalRightLeft)) {
            return $winner;
        }

        // Ничья
        return false;
    }
}

$judge = new TicTacToe();

$boardDraw = [
    ['x', 'x', 'o'],
    ['o', 'x', 'o'],
    ['x', 'o', null],
];
$boardRowWin = [
    ['x', 'o', 'o'],
    ['x', 'x', 'x'],
    ['o', 'o', null],
];
$boardColumnWin = [
    ['x', 'o', 'x'],
    ['x', 'o', null],
    ['o', 'o', 'x'],
];
$boardDiagonalLeftRightWin = [
    ['x', 'o', 'o'],
    ['x', 'x', 'o'],
    ['o', 'o', 'x'],
];
$boardDiagonalRightLeftWin = [
    [null, 'x', 'o'],
    ['x', 'o', 'x'],
    ['o', 'x', 'o'],
];

echo '$boardDraw  - ';
var_dump($judge->check($boardDraw));

echo '$boardRowWin - ';
var_dump($judge->check($boardRowWin));

echo '$boardColumnWin - ';
var_dump($judge->check($boardColumnWin));

echo '$boardDiagonalLeftRightWin - ';
var_dump($judge->check($boardDiagonalLeftRightWin));

echo '$boardDiagonalRightLeftWin - ';
var_dump($judge->check($boardDiagonalRightLeftWin));