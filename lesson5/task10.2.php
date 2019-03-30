<?php

function add(int $c, int $d) {
    return $c + $d;
};
function sub(int $a, int $b) {
    return $a - $b;
};

function operation(int $numOne, int $numTwo, string $operator) {
    if ($operator === "add") {
        $result = add($numOne, $numTwo);
    }
    elseif ($operator === "sub") {
        $result = sub($numOne, $numTwo);
    }
    return $result;
};
echo operation(1, 1, 'add');