<?php

function operation(int $numOne, int $numTwo, string $operator) {
    if ($operator == "add") {
        $result = $numOne + $numTwo;
    }
    elseif ($operator == "subtract") {
        $result = $numOne - $numTwo;
    }
    elseif ($operator == "multiply") {
        $result = $numOne * $numTwo;
    }
    elseif ($operator == "divide") {
        $result = $numOne / $numTwo;
    };
return $result;
};

echo  operation($_GET['numOne'], $_GET['numTwo'], $_GET['operator']);
