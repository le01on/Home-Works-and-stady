<?php

function revers($n)
{
    $i = strlen($n);
    if ($i > 0) {
        echo substr($n, $i - 1, 1) . " ";
        $n = substr($n, 0, -1);
    }
    if (!empty($n)) {
        revers($n);
    }
}

revers(8795);
