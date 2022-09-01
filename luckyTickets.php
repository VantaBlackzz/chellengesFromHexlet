<?php

// 8. Lucky ticket function (checked)

function isHappy(string $str) {
    $middle = strlen($str) / 2;
    $firstPart = 0;
    $lastPart = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        $i < $middle ? $firstPart .= $str[$i] : $lastPart .= $str[$i];
    } if($firstPart === $lastPart) {
        print_r('true');
        return true;
    } else {
        print_r('false');
        return false;
    }
}
isHappy('156456');
print_r("\n");
isHappy('456456');