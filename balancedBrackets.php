<?php

// 4. Balanced brackets

function isBalanced($char) {
    $stack = [];
    for ($i = 0; $i < strlen($char); $i++) {
        $current = $char[$i];
        if ($current === '(') {
            array_push($stack, $current);
        } elseif ($current === ')') {
            $prev = array_pop($stack);
            $pair = "{$prev}{$current}";
            if ($pair !== '()') {
                print_r('false');
                return false;
            }
        }
    }
    print_r('true');
    return true;
}

isBalanced('(()))');
isBalanced('(()))');
