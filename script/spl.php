<?php
function test()
{
    $a = 10;
    $b = 11;
    $c = 12;
    $func = function() use ($a,$b){
        echo $a.PHP_EOL;
        echo $b.PHP_EOL;
        echo $c;
    };
    $func();
}
test();  //10 11 c未找到
