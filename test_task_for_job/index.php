<?php
/*    Задача 1:
Написать функцию reverse, которая принимает на вход число и возвращает число с цифрами наоборот.
Например:
reverse(123);	//321
reverse(9482);	//2849
reverse(120);	//21
Будем считать, что передаются только положительные числа
Можно написать на любом языке программирования. Можно переводить числа в строки */

    function reverseString($num){
        settype($num, 'string');
        return strrev($num);
    }
    echo reverseString(123) . "\n";
    echo reverseString(9482) . "\n";
    echo reverseString(120) . "\n";

 /*   Задача 2:
Решить предыдущую задачу БЕЗ перевода чисел в строки*/

    function reverse($num)
    {
        $i = strlen($num);
        if ($i > 0) {
            echo substr($num, $i - 1, 1);
            $num = substr($num, 0, -1);
        }
        if (!empty($num)) {
            reverse($num);
        }
    }
  echo  reverse(123) . "\n";
  echo  reverse(9482) . "\n";
  echo  reverse(120) . "\n";

/*    Задача3:
    Есть строка, нужно найти самую длинную подстроку без повторяющихся символов.
Примеры:
Строка:		asdabbca
Результат:	sdab
Строка:		ppppppp
Результат:	p
Строка:		aqqmuv
Результат:	qmuv*/


    function longestSubStrOfString($string)
    {
        $arrFirst = [];
        $arrLast = [];
        $i = 0;

        while($i < strlen($string)){
            for ($a = $i; $a < strlen($string); $a++) {
                if (!in_array($string[$a], $arrFirst)) {
                    array_push($arrFirst, $string[$a]);
                } else {
                    if(count($arrLast) < count($arrFirst)) {
                        $arrLast = $arrFirst;
                        $arrFirst = [];
                        break;
                    }
                }
            }
            $i++;
        }
        return implode("", $arrLast);
    }

    echo longestSubStrOfString('asdabbca') . "\n";
    echo longestSubStrOfString('ppppppp') . "\n";
    echo longestSubStrOfString('aqqmuv') . "\n";


