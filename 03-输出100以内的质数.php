<?php
# 输出100以内的质数/素数
// 1既不是质数，也不是合数。2是最小的质数
// 根据 质数只有1和自己两个因数 的特性

# 方法一 - 数因数个数，有且只有2个因数，则为质数
for ($i = 2; $i <= 100; ++$i) {
    $count = 0;
    for ($j = 1; $j <= $i; ++$j) {
        if ($i % $j == 0) { // 能除断，则 $j 是 $i 的因数
           $count++;
        }
    }
    if ($count == 2) {
        echo "$i ";
    }
}

# 方法二 - 同上，但排除1和自身
for ($i = 2; $i <= 100; ++$i) {
    for ($j = 2; $j < $i; ++$j) {
        if ($i % $j == 0) { // 能除断，$j 是 $i 的因数
            // 这句话的作用就是看 $i 有没有因数，有因数就break，终止判断，没有因数就继续判断，若直到 $j 都等于 $i 了，还没有因数，则 $i 是质数
            break;
        }
    }
    if ($j == $i) {
        echo "$i ";
    }
}

