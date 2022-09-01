<?php

// 2. Fibonacci function (checked)

function fib($number) {
    $num_1 = 0;
    $num_2 = 1;
    $output = 0;

    for ($i = 0; $i <= $number; $i++) {
        if($i <= 1) {
            $output = $i;
        } else {
            $output = $num_1 + $num_2;
            $num_1 = $num_2;
            $num_2 = $output;
        }
        print_r($output . " ");
    }
}

fib(10);