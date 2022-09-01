<?php

// 1. Realisation fizzBuzz function (checked)

function fizzBuzz($begin, $end) {
    for ($i = $begin; $i <= $end; $i++) {
        if ($i % 3 === 0 && $i % 5 === 0) {
            print_r('FizzBuzz');
            print_r(" ");
        }   else if ($i % 3 === 0) {
            print_r('Fizz');
            print_r(" ");
        }
        else if ($i % 5 === 0) {
            print_r('Buzz');
            print_r(" ");
        } else {
            print_r($i);
            print_r(" ");
        };
    };
};
fizzBuzz(10, 25);
