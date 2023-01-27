<?php
function total(float $init, float ...$args): float
{
    // if (count($args) === 0) {
    //     throw new Exception('引数は1個以上指定してください。');
    // }
    $result = $init;
    foreach ($args as $arg) {
        $result += $arg;
    }
    return $result;
}

print total(7, 3, 10);
print total(11, -5, 4, 88);
