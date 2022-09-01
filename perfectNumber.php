<?php

// 3. Perfect number function (checked)

function isPerfect($number) {
    $temp = 0;
    for($i = 1; $i <= $number / 2; $i++) {
        if($number % $i === 0) {
            $temp += $i;
        }
    }
    if ($temp === $number && $temp !== 0) {
        print_r('true');
    } else {
        print_r('false');
    }

};

isPerfect(6);
