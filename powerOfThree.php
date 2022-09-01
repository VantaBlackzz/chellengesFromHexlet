<?php

// 5. Power of three function (checked)

function isPowerOfThree($a) {
    for ($i = 0; $i <= $a; $i++) {
        if (pow(3, $i) == $a) {
            print_r("true");
            return true;
        }
    }
    print_r("false");
    return false;
}

isPowerOfThree(3);