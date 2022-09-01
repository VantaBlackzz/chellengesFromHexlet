<?php

// 6. binarySum function

function binarySum($bin1, $bin2) {
    $num1 = bindec($bin1);
    $num2 = bindec($bin2);
    $sum = $num1 + $num2;
    print_r(decbin($sum));
}

binarySum('1101', '101');