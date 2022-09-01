<?php

// 7. addDigits function (checked)

function addDigits($num) {
    $str = strval($num);
    strlen($str) > 1 ? $sum = 0 : $sum = $num;
        while (strlen($str) > 1) {
            for ($i = 0; $i < strlen($str); $i++) {
                $sum += $str[$i];
            }
            $str = strval($sum);
                if (strlen($str) > 1) {
                    $sum = 0;
                }
        }
        print_r($sum);
}

addDigits(38);